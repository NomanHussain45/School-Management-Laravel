<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

//starts Decorator

abstract class Controller implements add{
  abstract public function add();
}
interface add{
  public function add();
}

//ends Decorator

class AdministrationController extends Controller
{
  
     public function add()
    {

    	$_POST['token'] = $_POST['_token'];
       DB::table('admin')->insert(['firstname' => $_POST['firstname'],'lastname' => $_POST['lastname'],'cnic' => $_POST['cnic'],'email' => $_POST['email'],'salary' => $_POST['salary'],'age' => $_POST['age'],'qualification' => $_POST['qualification'],'contact' => $_POST['contact']]);
      	DB::table('login')->insert(['username' => $_POST['username'],'password' =>$_POST['password'],'role' =>'3']);
     
    }
    function addprincipal()
    {
    	$_POST['token'] = $_POST['_token'];
       DB::table('principle')->insert(['firstname' => $_POST['firstname'],'lastname' => $_POST['lastname'],'cnic' => $_POST['cnic'],'email' => $_POST['email'],'salary' => $_POST['salary'],'age' => $_POST['age'],'qualification' => $_POST['qualification'],'contact' => $_POST['contact']]);
    }
    function addteacher()
    {
    	$_POST['token'] = $_POST['_token'];
      $class = implode(',', $_POST['class']);
       $subject = implode(',', $_POST['name']);    
        $id = DB::table('login')->insertGetId(['username' => $_POST['username'],'password' =>$_POST['password'],'role' =>'2']);  

       DB::table('teacher_info')->insert(['firstname' => $_POST['firstname'],'lastname' => $_POST['lastname'],'cnic' => $_POST['cnic'],'email' => $_POST['email'],'salary' => $_POST['salary'],'age' => $_POST['age'],'qualification' => $_POST['qualification'],'contact' => $_POST['contact'],'class' => $class,'login_id' => $id]);

         // DB::table('subject')->insert(['name' => $subject]);

    }
    
    function addclass()
    {
      $_POST['token'] = $_POST['_token'];
      DB::table('class')->insert(['name' => $_POST['name']]);
    }
    function getadmin()
    {
      $admin = DB::table('admin')->get();
      return view('adminlist',['ad'=>$admin]);
    }
    function getprinciple()
    {
      $principle = DB::table('principle')->get();
      return view('principlelist',['prin'=>$principle]);
    }
    function getstudent()
    {
      $student = DB::table('student_info')->
      join('section','student_info.section','=','section.id')->select('student_info.*','section.*','student_info.id as stuid')
      ->get();
       return view('studentlist',['stud'=>$student]);
      }
    function getstaff()
    {
      if(session('loginstatus') == TRUE)
      {
      $staff = DB::table('d_staff')->get();
      return view('s_list',['sta' =>$staff]);
    }
    else
    {
      return redirect('/');
    }
    }
    function getteacher()
    {
        $teacher = DB::table('subject')->
        join('teacher_info','teacher_info.id','=','subject.id')->
        get();
        return view('teacherlist',['teach'=>$teacher]);
    }
    function getclass()
    {
      $data = DB::table('class')->
      get();
      return response()->json($data);
    }
    function getClassStudents($id)
    {
      $data = DB::table('section')->where('class_id',$id)->get();
      return response()->json($data);
    }
    
     function getSectionCLasses($id)
    {
      $data = DB::table('section')->where('class_id',$id)->get();
      return response()->json($data);
    }
    function getSections($id)
    {
      $data = DB::table('student_info')->where('section',$id)
      ->select('*','section.id as sectionId','student_info.id as studentId')
      ->join('section','student_info.section','=','section.id')
      ->get();
      return response()->json($data);
    }
    function Sectionn($id)
    {
      $data = DB::table('student_info')->where('section',$id)
      ->select('*','section.id as sectionId','student_info.id as studentId')
      ->join('section','student_info.section','=','section.id')
      ->get();
      return response()->json($data);
    }
    function addSectionClass()
    {
       $_POST['token'] = $_POST['_token'];
      DB::table('section')->insert(['class_id'=>$_POST['class_id'],'name'=>$_POST['name']]);
    }
    function getStudentSections()
    {
      $data = DB::table('class')->get();
      return response()->json($data);
    }
    function sec()
    {
      $data = DB::table('section')->get();
      return response()->json($data);
    }
    function attendanceInsert()
    {
     DB::table('attendance')->insert(['present'=>$_POST['present'],'student' => $_POST['student'],'section' =>$_POST['section'],'classId' => $_POST['classId']]);
    }
    function getattendance()
    {
      $attendance = DB::table('attendance')->
      join('section','attendance.section','=','section.id')->
      select('attendance.*','section.*','attendance.id as attid')
      ->get();
     // print_r($attendance);
       return view('viewattendance',['att'=>$attendance]);

    }
    // public function get()
    // {
    //   $fatech = DB::table('block')->get();
    //   return view('viewblock',['fet'=> $fetch]);
    // }

}

