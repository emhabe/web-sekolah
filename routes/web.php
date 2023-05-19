<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingController::class, 'index']);
Route::get('/dashboard',[AdminController::class,'dashboard']);
Route::get('/bkk',[AdminController::class,'bkk']);
Route::get('/pgri',[AdminController::class,'pgri']);
Route::get('/profile',[AdminController::class,'profile']);


