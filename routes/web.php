<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
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


Route::post('/register', [AuthController::class, "signup"]);
Route::post('/login', [AuthController::class, "login"]);
Route::put('/forgetPass', [AuthController::class, "forgetPass"]);
Route::get('/logout', [AuthController::class, "logout"]);


Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');