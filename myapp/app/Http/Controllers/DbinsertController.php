<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DbinsertController extends Controller
{
    //
    public function student_list(){
        $list = DB::select("select*from student");
        return view('student_list',['list'=>$list]);
    }

    public function insert_form(){
        return view('insert_form');
    }

    public function insert(Request $request){
        $name = $request->input('name');
        DB::insert('insert into student(name) values(?) ',[$name]);
        return "Insert Successfully";
    }

    public function edit($id){
        $student = DB::statement('select*from student where id = ?',[$id]);
        return view('student_edit',['student'=>$student]);
    }

    public function update(Request $request,$id){
        $name = $request->input('student_name');
        DB::update('update student set name=? where id=?',[$name,$id]);
        return "record update sucess";
    }
}
