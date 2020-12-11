<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('bai2/{title}',[HomeController::class,'bai2']);

Route::get('bai3',[HomeController::class,'bai3'])->middleware('checktoken')->middleware('checkuser:admin');

Route::get('bai5',[HomeController::class,'bai5'])->name('home');

Route::get('about',[HomeController::class,'about'])->name('about');
