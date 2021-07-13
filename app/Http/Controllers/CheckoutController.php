<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use DB;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout.cart');
    }

    public function saveOrder(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'payment_method' => 'required'
        ]);
           
        $order = Order::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'payment_method' => $request->payment_method,
            'created_at' => Carbon::now()
        ]);

        foreach(session('cart') as $id => $details) {
            DB::table('order_items')->insert([
                'order_id' => $order->id,
                'product_id'=> $details['id'],
                'quantity' => $details['quantity'],
                'price' => $details['price'],
                'total_price' => $details['quantity'] * $details['price']
            ]);
        }
        session()->forget('cart');

        return redirect('/checkout/thank-you');
    }

    public function thankYou()
    {
        return view('checkout.thank-you');
    }
}
