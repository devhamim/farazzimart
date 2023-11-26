<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use App\Models\Billingdetails;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\customers;
use App\Models\shippingMethods;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Str;

class CheckoutController extends Controller
{
    //checkout
    function checkout() {
        $categories = Category::all();
        $shipping_methods = shippingMethods::where('status', 1)->get();
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('frontend.checkout.checkout', [
            'categories'=> $categories,
            'cart_data'=> $cart_data,
            'shipping_methods'=> $shipping_methods,
        ]);
    }

    

    // order_store
    function order_store(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ]);

            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $items_in_cart = $cart_data;

            if(Coupon::where('coupon_name', $request->coupon)->exists()) {
                $coupon = Coupon::where('coupon_name', $request->coupon)->first()->get();
                $coupon_price = $coupon->first()->coupon_amount;
            } else {
                $coupon_price = 0;
            }
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $order_id = Str::random(3).'-'.rand(1000,9999);
            Billingdetails::insert([
                'order_id' => $order_id,
                'customer_name' => $request->name,
                'customer_phone' => $request->mobile,
                'customer_address' => $request->address,
                'created_at' => Carbon::now(),
            ]);
            customers::insert([
                'customer_name' => $request->name,
                'customer_phone' => $request->mobile,
                'customer_address' => $request->address,
                'created_at' => Carbon::now(),
            ]);

            Order::insert([
                'order_id' => $order_id,
                'shipping_cost' => $request->charge,
                'sub_total' => $request->sub_total,
                'total' => $request->total,
                'order_date' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]);

            $items_in_cart = $cart_data;
            foreach($items_in_cart as $key=>$itemdata) {
                OrderProduct::create([
                    'order_id' => $order_id,
                    'product_id' => $itemdata['item_id'],
                    'quantity' => $itemdata['item_quantity'],
                    'created_at' => Carbon::now(),
                ]);
                Inventory::where('product_id', $itemdata['item_id'])->decrement('quantity', $itemdata['item_quantity']);
            }
            // Cookie::queue(Cookie::forget('shopping_cart'));
            Cookie::queue(Cookie::forget('shopping_cart'));

            return redirect()->route('order.success')->withSuccess("Order has been placed successfully")->withOrder($order_id);

        // return back()->with('success', 'order has been placed successfully');
    }

    // // order_success
    function order_success() {
        return view('frontend.checkout.order_success');
        if(session('order_id')) {
            $order_id = session('order_id');
            return view('frontend.order.order_success', [
                'order_id' => $order_id,
            ]);
        } else {
            abort('404');
        }
        // if(session('order_id')){
        //     return view('frontend.checkout.order_success');
        // }
        // else{
        //     abort(404);
        // }
        
    }
}
