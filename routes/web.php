<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/index',[UserController::class, "index"])->name("login.index");
Route::post('/login',[UserController::class, "login"])->name("masuk");

Route::middleware(["auth"])->group( function(){
    Route::group(["prefix"=> "admin"], function(){
        Route::get('/index',[UserController::class, "dashboard"])->name("dashboard.index");
        Route::get("logout",[UserController::class, "logout"])->name("logout");
    });
});
