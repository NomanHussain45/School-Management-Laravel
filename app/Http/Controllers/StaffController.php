<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    function add()
    {
    	$_POST['token'] = $_POST['_token'];
      DB::table('d_staff')->insert(['firstname' => $_POST['firstname'],'lastname' => $_POST['lastname'],'cnic' => $_POST['cnic'],'email' => $_POST['email'],'salary' => $_POST['salary'],'age' => $_POST['age'],'qualification' => $_POST['qualification'],'contact' => $_POST['contact']]);
    }
    //Proxy
    //Null Object
    function show($id)
    {
    	$user = DB::table('d_staff')->where('id','=',$id)->get();
        return view('show')->with(['list' => $user]);
    }
    // Ends
    
     function deletestaff($id)
    {
        DB::table('d_staff')->delete($id);
    	 return redirect('/Staff-list');
    
    }
    function SectionAndClass()
    {
       $_POST['_token'] = $_POST['_token'];
       unset($_POST['_token']);
       $id = DB::table('login')->insertGetId(['username' => $_POST['username'],'password' =>$_POST['password'],'role' =>'1']);
        
       DB::table('student_info')->insert(['firstname' => $_POST['firstname'],'lastname' => $_POST['lastname'],'email' => $_POST['email'],'father' => $_POST['father'],'qualification' => $_POST['qualification'],'contact' => $_POST['contact'],'class_id' => $_POST['class_id'],'section'=> $_POST['section'],'login_id'=> $id]);
        
    }
    function getuser()
    {
        $id = session('id');
        $getdata = DB::table('student_info')
        ->where('login_id','=',$id)->first();
        return view("userprofile",['data'=> $getdata]);

    }
    function getuserto()
    {
        $id = session('id');
        $data = DB::table('teacher_info')
        ->where('login_id','=',$id)->first();
        return view("teacherprofile",['teach'=> $data]);
    }
    


 }
 
 ?>

