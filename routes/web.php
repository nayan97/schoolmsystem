<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;

/*
auth routes
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'authlogin']);
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/forgotpassword',[AuthController::class,'forgotpassword']);
Route::post('/forgotpassword',[AuthController::class,'postforgotpassword']);

// Route::get('/admin/dashboard', function () {
//     return view('admin.pages.dashboard');
// });





Route::group(['middleware => admin'],function (){
    Route::get('/admin/dashboard',[DashboardController::class,'dashboard']);
    Route::resource('/admin/admin',AdminController::class);

       
    });

Route::group(['middleware => student'],function (){
    Route::get('/student/dashboard',[DashboardController::class,'dashboard']);
       
    });
    
Route::group(['middleware => teacher'],function (){
    Route::get('/teacher/dashboard',[DashboardController::class,'dashboard']);
    });
    

