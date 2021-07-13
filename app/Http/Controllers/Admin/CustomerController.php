<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin');
    }
    
    public function index()
    {
        $customers = User::where('type',0)->get();

        return view('admin.customers.index',compact('customers'));
    }

    public function show($id)
    {
        $customer = User::find($id);
        
        return view('admin.customers.show',compact('customer'));
    }
}
