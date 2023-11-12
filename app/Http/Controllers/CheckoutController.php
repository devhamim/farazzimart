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
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    //checkout
    function checkout() {
        $categories = Category::all();
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('frontend.checkout.checkout', [
            'categories'=> $categories,
            'cart_data'=> $cart_data,
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
            $order_id = '#'.'ORDER'.'-'.rand(10000, 99999);
            
            Billingdetails::insert([
                'order_id' => $order_id,
                'customer_id' => str_replace(" ", "", $request->name).'-'.rand(1000, 9999),
                'name' => $request->name,
                'mobile' => $request->mobile,
                'address' => $request->address,
                'created_at' => Carbon::now(),
            ]);

            OrderProduct::insert([
                'order_id' => $order_id,
                'customer_id' => str_replace(" ", "", $request->name).'-'.rand(1000, 9999),
                'charge' => $request->charge,
                'created_at' => Carbon::now(),
            ]);

            $items_in_cart = $cart_data;
            foreach($items_in_cart as $key=>$itemdata) {
                Order::create([
                    'order_id' => $order_id,
                    'customer_id' => str_replace(" ", "", $request->name).'-'.rand(1000, 9999),
                    'product_id' => $itemdata['item_id'],
                    'quantity' => $itemdata['item_quantity'],
                    'price' => $itemdata['item_price'],
                    'charge' => $request->charge,
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
