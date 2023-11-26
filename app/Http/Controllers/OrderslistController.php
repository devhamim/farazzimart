<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courier;
use App\Models\city;
use App\Models\courierzone;
use App\Models\Product;
use App\Models\Billingdetails;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\customers;
use Carbon\Carbon;
use Str;

class OrderslistController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //orders_list
    function orders_list(){
        // $order_id = Order::all();
        $order_id = Order::with('rel_to_billing')->get();
        $billingdetails = Billingdetails::where('order_id', $order_id->first()->order_id)->get();
        $OrderProducts = OrderProduct::where('order_id', $order_id->first()->order_id)->get();
        $total_orders = Order::count();
        $total_processing = Order::where('status', 1)->count();
        $total_pending = Order::where('status', 3)->count();
        $total_hold = Order::where('status', 0)->count();
        $total_completed = Order::where('status', 2)->count();
        $total_cancel = Order::where('status', 4)->count();
        return view('backend.orders.orders_list', [
            'order_id'=>$order_id,
            'billingdetails'=>$billingdetails,
            'OrderProducts'=>$OrderProducts,
            'total_orders'=>$total_orders,
            'total_processing'=>$total_processing,
            'total_pending'=>$total_pending,
            'total_hold'=>$total_hold,
            'total_completed'=>$total_completed,
            'total_cancel'=>$total_cancel,
        ]);
    }
    //orders_add
    function orders_add(){
        $order_id = Order::all();
        $couriers = courier::where('status', 1)->get();
        $products = Product::where('status', 1)->get();
        return view('backend.orders.orders_add', [
            'couriers'=>$couriers,
            'products'=>$products,
            'order_id'=>$order_id,
        ]);
    }

    // orders_store
function orders_store(Request $request){
        $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_address' => 'required',
        ]);
    $order_id = Str::random(3).'-'.rand(1000,9999);
    // Create an order
    $order = Order::create([
        'order_id' => $order_id,
        'order_date' => $request->order_date,
        'invoice_id' => $request->invoice_id,
        'sub_total' => $request->sub_total,
        'shipping_cost' => $request->shipping_cost,
        'discount' => $request->discount,
        'total' => $request->total,
        'courier_id' => $request->courier_id,
        'city_id' => $request->city_id,
        'courier_zone_id' => $request->courier_zone_id,
        'order_note' => $request->order_note,
        'created_at' => Carbon::now(),
    ]);

    // Create billing details
    Billingdetails::create([
        'order_id' => $order_id,
        'customer_name' => $request->input('customer_name'),
        'customer_phone' => $request->input('customer_phone'),
        'customer_address' => $request->input('customer_address'),
        'created_at' => Carbon::now(),
    ]);
    
    // Create billing details
    customers::create([
        'customer_name' => $request->input('customer_name'),
        'customer_phone' => $request->input('customer_phone'),
        'customer_address' => $request->input('customer_address'),
        'created_at' => Carbon::now(),
    ]);

    // Insert order products
    $productIds = $request->product_id;
    $prices = $request->price;

    foreach ($request->quantity as $key => $quantity) {
        OrderProduct::create([
            'order_id' => $order_id,
            'product_id' => $productIds[$key],
            'quantity' => $quantity,
            'price' => $prices[$key],
        ]);
    }
    return back()->withSuccess('Order add successfully');
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
        'product_id' => $product->id,
        'sku' => $product->sku,
        'productName' => $product->product_name,
        'product_price' => $product->product_price,
        'sub_total' => $product->product_price*$product->quantity,
    ];

    return response()->json($data);
}

 // status_update
 function status_update(Request $request){
    $order = Order::find($request->order_id);

    if (!$order) {
        return back()->with('error', 'Order not found');
    }

    $order->status = $request->status;
    $order->save();

    return back()->with('success', 'Order status updated successfully');
}

// orders_update
function orders_edit($order_id){
    $orders = Order::where('order_id',$order_id)->first();
    $orderproducts = OrderProduct::where('order_id',$order_id)->first();
    $billingdetails = Billingdetails::where('order_id',$order_id)->first();
    $couriers = courier::all();
    $products = Product::all();
    return view('backend.orders.orders_edit', [
        'orders' => $orders,
        'billingdetails' => $billingdetails,
        'orderproducts' => $orderproducts,
        'couriers' => $couriers,
        'products' => $products,
    ]);
}

public function orders_update(Request $request)
{
    $request->validate([
        'customer_name' => 'required',
        'customer_phone' => 'required',
        'customer_address' => 'required',
    ]);

    // If you have an existing order_id, retrieve the order
    $order_id = $request->input('order_id') ?: Str::random(3) . '-' . rand(1000, 9999);
    $order = Order::where('order_id', $order_id)->first();

    if($request->courier_id == ''){
        Order::where('order_id',$order_id)->update([
            'order_date' => $request->order_date,
            'invoice_id' => $request->invoice_id,
            'sub_total' => $request->sub_total,
            'shipping_cost' => $request->shipping_cost,
            'discount' => $request->discount,
            'total' => $request->total,
            'order_note' => $request->order_note,
            'updated_at' => Carbon::now(),
        ]);
    }
    elseif($request->city_id == ''){
        Order::where('order_id',$order_id)->update([
            'order_date' => $request->order_date,
            'invoice_id' => $request->invoice_id,
            'sub_total' => $request->sub_total,
            'shipping_cost' => $request->shipping_cost,
            'discount' => $request->discount,
            'total' => $request->total,
            'courier_id' => $request->courier_id,
            'order_note' => $request->order_note,
            'updated_at' => Carbon::now(),
        ]);
    }
    else{
        Order::where('order_id',$order_id)->update([
            'order_date' => $request->order_date,
            'invoice_id' => $request->invoice_id,
            'sub_total' => $request->sub_total,
            'shipping_cost' => $request->shipping_cost,
            'discount' => $request->discount,
            'total' => $request->total,
            'courier_id' => $request->courier_id,
            'city_id' => $request->city_id,
            'courier_zone_id' => $request->courier_zone_id,
            'order_note' => $request->order_note,
            'updated_at' => Carbon::now(),
        ]);
    }
    

    // Create or update billing details
    Billingdetails::where('order_id',$order_id)->update([
            'customer_name' => $request->input('customer_name'),
            'customer_phone' => $request->input('customer_phone'),
            'customer_address' => $request->input('customer_address'),
            'updated_at' => Carbon::now(),
        ]
    );
if($request->product_id != ''){
    // Insert or update order products
    $productIds = $request->product_id;
    $prices = $request->price;

    foreach ($request->quantity as $key => $quantity) {
        OrderProduct::where('order_id',$order_id)->update([
            'product_id' => $productIds[$key],
            'quantity' => $quantity,
            'price' => $prices[$key],
            ]
        );
    }

}


    return back()->withSuccess('Order updated successfully');
}

function orders_delete($id){

    Order::find($id)->delete();
    return back()->withError('Order Delete Successfully');
}

}
