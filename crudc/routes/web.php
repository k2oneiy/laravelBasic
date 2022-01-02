<?php

use App\Http\Controllers\StudentController;
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

Route::get('/',[StudentController::class,'view']);
Route::get('/insert',[StudentController::class,'insert_form']);
Route::post('/insert',[StudentController::class,'insert']);
Route::get('/update/{id}',[StudentController::class,'update_form']);
Route::post('/update/{id}',[StudentController::class,'update']);
Route::get('/delete/{id}',[StudentController::class,'delete']);
Route::get('/deleteall',[StudentController::class,'deleteall']);


