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
Route::view('/beautician',"beautProfile");
Route::view('/reviews',"reviews");
Route::view('/logout',"logout");
Route::view('/booking',"booking");
Route::view('/services',"services");
Route::view('/beautServices',"beautservices");
Route::view('/appointments',"appointments");
Route::view('/approvedAppointments',"approvedAppointments");
Route::get('/store',"UserController@store");
Route::get('/logs',"UserController@logs");
Route::get('/update',"BeautProfileUpdater@update");
Route::get('/Supdate',"BeautServiceUpdater@update");
Route::get('/CustomStore',"CustomerController@CustomStore");
Route::get('/Customlogs',"CustomerController@Customlogs");
Route::get('/storeSession',"sessionController@storeSession");
Route::get('/getSession',"sessionController@getSession");
Route::get('/deleteSession',"sessionController@deleteSession");