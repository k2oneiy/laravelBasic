<?php


namespace App\Http\Controllers;
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

Route::get('/',[UserController::class,'create']);
Route::post('/store',[UserController::class,'store']);

Route::get('/view',[UserController::class,'view']);
Route::get('/update/{id}',[UserController::class,'update']);
Route::post('/update/{id}',[UserController::class,'update_form']);


Route::get('/delete/{id}',[UserController::class,'delete']);


