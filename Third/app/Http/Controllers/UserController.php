<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loginuser;



class UserController extends Controller
{
    public function create(){
        return view('create_user');
    }
    public function store(Request $request){
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $password = $request->input('password');
        // $obj = new loginuser;
        // $obj->name = $name;
        // $obj->email = $email;
        // $obj->password = $password;
        // $obj->save();

        $user = $request->only(['name','email','password']);
        $obj = loginuser::create($user);
        return "User Create Sucessfully user id is ".$obj->id;
    }

    public function view(){
        $user = loginuser::all();
        return view('view',['users'=>$user]);
    }

    public function update($id){
        $user = loginuser::find($id);
        return view('update',['user'=>$user]);
    }

    public function update_form(Request $request,$id){
        $user = loginuser::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return "User update Successully";
    }

    public function delete($id){
        $user = loginuser::find($id);
        $user->delete();
        return "Delete Sucessfully";
    }
}
