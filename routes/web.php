<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\laravel_controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('one_to_one_route',[laravel_controller::class,'one_to_one']);

Route::get('One_to_many_route',[laravel_controller::class,'one_to_many']);

Route::get('main_page',[laravel_controller::class,'main_view']);


Route::get('many_to_many_route',[laravel_controller::class,'many_to_many']);
