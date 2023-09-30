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
            if (Auth::user()->user_type==1) {

                return redirect('admin/dashboard');
            }else if (Auth::user()->user_type==0) {

                return redirect('student/dashboard');
            }else if (Auth::user()->user_type==2) {
                
                return redirect('teacher/dashboard');

            }
        }
            return view('auth.login');

    }

//login function
    public function authlogin(Request $request){

        // $remember = !empty($request->remember)? ture : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true)){
            if (Auth::user()->user_type==1) {

                return redirect('admin/dashboard');
            }else if (Auth::user()->user_type==0) {

                return redirect('student/dashboard');
            }else if (Auth::user()->user_type==2) {

                return redirect('teacher/dashboard');

            }

    
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
