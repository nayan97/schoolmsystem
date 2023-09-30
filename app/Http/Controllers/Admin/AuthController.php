<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login(){
        // dd(Hash::Make('asdfg123'));

        if(!empty(Auth::check())){
            return redirect('admin/dashboard');
        }
            return view('auth.login');

    }

//login function
    public function authlogin(Request $request){

        // $remember = !empty($request->remember)? ture : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true)){
    
            return redirect('admin/dashboard');

    
    }else
    {
        return redirect()->back()->with('error', 'Wrong email or password');
    }
   }

   //logout function

   public function logout(){
    Auth::logout();
    return redirect('/');
   }
}
