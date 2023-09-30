<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        if (Auth::user()->user_type==1) {

            return view('admin.pages.dashboard');
        }else if (Auth::user()->user_type==0) {

            return view('student.dashboard');
        }else if (Auth::user()->user_type==2) {

            return view('teacher.dashboard');

        }
    }
}
