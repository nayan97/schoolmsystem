<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
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

// Route::get('/admin/dashboard', function () {
//     return view('admin.pages.dashboard');
// });

Route::get('/admin/admin', function () {
    return view('admin.pages.list');
});



Route::group(['middleware => admin'],function (){
    Route::get('/admin/dashboard',[DashboardController::class,'dashboard']);
       
    });

Route::group(['middleware => student'],function (){
    Route::get('/student/dashboard',[DashboardController::class,'dashboard']);
       
    });
    
Route::group(['middleware => teacher'],function (){
    Route::get('/teacher/dashboard',[DashboardController::class,'dashboard']);
    });
    

