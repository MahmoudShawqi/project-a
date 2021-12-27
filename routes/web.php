<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth ;
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
Route::get('welcome',[ProductController::class ,'welcome']);
Route::get('/',[ProductController::class ,'index']);
Route::get('create',[ProductController::class ,'create']);
Route::post('store',[ProductController::class ,'store']);
Route::put('edit/{id}',[ProductController::class ,'edit']);
Route::patch('update/{id}',[ProductController::class ,'update']);
Route::delete('destroy/{id}',[ProductController::class ,'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
