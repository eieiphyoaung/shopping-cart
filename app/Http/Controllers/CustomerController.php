<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function login()
    {
        return view('customers.login');
    }  
      

    public function customerLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
  
        return redirect("login")->with('error','Login details are not valid');
    }



    public function register()
    {
        return view('customers.register');
    }
      

    public function customerRegister(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'same:password',
            'profile' => 'required|mimes:jpeg,jpg,png',
        ]);
           
        $data = $request->all();
        
        $check = $this->create($data);


         
        return redirect("/")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        $imagePath = $data['profile'];
        $imageName = $imagePath->getClientOriginalName();

        $path = $data['profile']->storeAs('uploads', $imageName, 'public');

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'profile' => '/storage/'.$path,
            'type' => 0,
            'created_at' => Carbon::now()
        ]);
        
        Auth::login($user);

        return $user;
    }    

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    

}
