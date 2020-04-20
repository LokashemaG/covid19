<?php

use Illuminate\Support\Facades\Route;

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
      
    $path = public_path('storage/json/state_district_wise.json');    
    $data=json_decode(file_get_contents($path));
    
    return view('welcome',compact('data'));
});
