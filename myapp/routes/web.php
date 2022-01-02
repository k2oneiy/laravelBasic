<?php

use App\Http\Controllers\DbinsertController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/user-from',function(){
    $title = "Send Data Form Method Post";
    return view('user',['title'=>$title]);
});

Route::post('get-data',function(Request $request){
    // dd($request->all());
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');


    return redirect('user-from')->with('message',"Data submit Successfully!");
    // return "Hi ".$name."Email is ".$email."Password is ".$password;


});


Route::get("/sample-page/{id}/{type?}",function($id,$type=null){
    if($id==0&&$type="number"){
        return "This is first number";
    }
    else if($id==2&&$type="text"){
        return "This is second text";
    }
    else if($id==1&&$type==null){
        return "Some thing Wrong";
    }

})->name('page');

Route::view('page','page');

Route::prefix('gallary')->group(function(){
    Route::get('photos',function(){
        return "Photos Page";
    });
    Route::get('videos',function(){
        return "videos Page";
    });
    Route::get('documents',function(){
        return "documents Page";
    });
});


// Route::get('month/{num}',function($num){
//     if($num==1){
//         return 'January';
//     }
//     else if($num==2){
//         return 'Febrauary';
//     }
//     else if($num==3){
//         return 'March';
//     }
// })->middleware('month');



Route::get('/login',[LoginController::class,'login_form']);

Route::get('/show/{id}',[PostController::class,'show']);

Route::get('/con/{number}',[MonthController::class,'Nummonth']);

// Route::view('/layout','layouts.home');




Route::get('/',function(){
    $ti = "iyappan kk today working laravel";
    $number_of_users = 58435;
    $user_online = 0;
    $user_settings = "settings";
    $name = [['name'=>'iyappan'],['name'=>'deepak'],['name'=>'velmurugan']];
    return view('index',compact('ti','number_of_users','user_online','name'));
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/login',function(){
    return view('login');
});

Route::get('/register',function(){
    return view('register');
});


Route::get('/insert',[DbinsertController::class, 'insert_form']);
Route::post('create',[DbinsertController::class,'insert']);



Route::get('list',[DbinsertController::class,'student_list']);
Route::get('edit/{id}',[DbinsertController::class,'edit']);
Route::post('edit/{id}',[DbinsertController::class,'update']);
