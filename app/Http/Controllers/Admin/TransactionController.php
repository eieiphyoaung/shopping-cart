<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }

    public function index()
    {
        $orders = Order::all();

        return view('admin.transactions.index',compact('orders'));
    }

    public function show($id)
    {
        $order = Order::find($id);
        
        return view('admin.transactions.show',compact('order'));
    }
}
