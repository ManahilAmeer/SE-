<?php

use App\Http\Controllers\UserController;
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

Route::view('/',"index");
Route::view('/layout',"layout");
Route::view('/index',"index");
Route::view('/welcome',"welcome");
Route::view('/login',"login");
Route::view('/register',"register");
Route::view('/CustomLogin',"CustomLogin");
Route::view('/CustomRegister',"CustomRegister");
Route::view('/Beautician',"beautProfile");
Route::get('/store',"UserController@store");
Route::get('/logs',"UserController@logs");