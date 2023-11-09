<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $currentMonth = now()->format('Y-m');

        $month_order =  DB::table('orders')
            ->whereRaw('DATE_FORMAT(created_at, "%Y-%m") = ?', [$currentMonth])
            ->sum('price');

        $product_id = Product::all();
        $orders_list = Order::all();
        $products_count = Product::count();
        $users_count = User::count();
        $orders_count = Order::count();
        $brand_count = Brand::count();
        $brands = Brand::all();
        $brands_order = Order::where('product_id', $product_id->first()->rel_to_brand)->get();
        return view('home', [
            'orders_count'=>$orders_count,
            'users_count'=>$users_count,
            'products_count'=>$products_count,
            'orders_list'=>$orders_list,
            'brand_count'=>$brand_count,
            'month_order'=>$month_order,
            'brands'=>$brands,
            'brands_order'=>$brands_order,
        ]);
    }


}
