<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\courier;
use App\Models\city;
use App\Models\courierzone;
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
        return view('backend.orders.orders_add', [
            'couriers'=>$couriers,
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

    function getCities(Request $request){
        $cities = city::where('courier_id', $request->id)->pluck('name', 'id');

        return response()->json($cities);
    }
    
    function getzone(Request $request){
        $zones = courierzone::where('courier_id', $request->id)->where('city_id', $request->city_id)->pluck('zone', 'id');

        return response()->json($zones);
    }
}
