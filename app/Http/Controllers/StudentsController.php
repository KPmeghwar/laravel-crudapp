<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class StudentsController extends Controller
{   
    public function add(Request $req){
      $stu = new students;
      $stu->name=$req->name; 
      $stu->class=$req->class; 
      $stu->save();
      return redirect('students');
    }
    public function view(){
        $data= students::all();
        return view('view',['data'=>$data]);
    }

    public function update($id){
       $data=students::find($id);
       return view('update',['data'=>$data]);
    }
    public function updatestudent(Request $req){
       $stu=students::find($req->id);
       $stu->name=$req->name; 
       $stu->class=$req->class; 
       $stu->save();
       return redirect('students');
    }
    public function delete($id){
       $data=students::find($id);
       $data->delete();
       return redirect('students');
    }
}