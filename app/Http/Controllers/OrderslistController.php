<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courier;
use App\Models\city;
use App\Models\courierzone;
use App\Models\Product;
use Carbon\Carbon;

class OrderslistController extends Controller
{
    //orders_list
    function orders_list(){
        // $medias = media::all();
        return view('backend.orders.orders_list', [
            // 'medias'=>$medias,
        ]);
    }
    //orders_add
    function orders_add(){
        $couriers = courier::where('status', 1)->get();
        $products = Product::where('status', 1)->get();
        return view('backend.orders.orders_add', [
            'couriers'=>$couriers,
            'products'=>$products,
        ]);
    }

    // orders_store
    function orders_store(Request $request){
        $request->validate([
            'courier_id' => 'required',
            'city_id' => 'required',
            'zone' => 'required',
            'status' => 'required',
        ]);

        courierzone::insert([
            'courier_id' => $request->courier_id,
            'city_id' => $request->city_id,
            'zone' => $request->zone,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);
        return back()->withSuccess('Courier Zone add successfully');
    }
    
    public function getCities(Request $request)
{
    $courierId = $request->input('id');
    if (!$courierId) {
        return response()->json(['error' => 'No courier ID provided.']);
    }

    $cities = City::where('status', 1)->where('courier_id', $courierId)->pluck('name', 'id');
    
    $charge = courier::where('id', $courierId)->value('charge');

    return response()->json(['cities' => $cities, 'charge' => $charge]);
}
    
    function getzone(Request $request){
        $zones = courierzone::where('status', 1)->where('city_id', $request->id)->pluck('zone', 'id');

        return response()->json($zones);
    }

    // getproduct
    public function getProduct(Request $request)
{
    $productId = $request->input('id');
    if (!$productId) {
        return response()->json(['error' => 'No product ID provided.']);
    }
    $product = Product::find($productId);

    if (!$product) {
        return response()->json(['error' => 'Product not found.']);
    }
    $data = [
        'sku' => $product->sku,
        'productName' => $product->product_name,
        // 'quantity' => 1,
        'product_price' => $product->product_price,
        'sub_total' => $product->product_price*$product->quantity,
    ];

    return response()->json($data);
}
}
