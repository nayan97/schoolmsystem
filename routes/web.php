<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

/*
auth routes
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'authlogin']);
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/admin/dashboard', function () {
    return view('admin.pages.dashboard');
});

Route::get('/admin/admin', function () {
    return view('admin.pages.list');
});

