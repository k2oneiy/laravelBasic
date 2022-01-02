<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function insert(Request $request){
        $name = $request->input('name');
        $password = $request->input('password');
        DB::insert('insert into stu(username,password) values(?,?)',[$name,$password]);
        return "Insert Record Sucessfully";
    }
    public function insert_form(){
        return view('insert');
    }
    public function view(Request $request){
        $list = DB::select('select*from stu');
        return view('welcome',['list'=>$list]);
    }


    public function update(Request $request,$id){
        $name = $request->input('name');
        $password = $request->input('password');
        DB::update('update stu set username=?,password=? where id=?',[$name,$password,$id]);
        return "update sucessfully , <a href='/'>return Home</a>";
    }
    public function update_form($id){
        $student = DB::select('select*from stu where id=?',[$id]);
        return view('update',['student'=>$student]);
    }

    public function delete($id){
        DB::delete('delete from stu where id = ?',[$id]);
        return "delete success , <a href='/'>return Home</a>";
    }

    public function deleteall(){
        DB::statement("truncate table stu");
        return "All record delete sucessfully";
    }
}
