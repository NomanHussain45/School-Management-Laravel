<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class functionController extends Controller
{
   
    function deleteprinciple($id)
    {
    	DB::table('principle')->delete($id);
    	return redirect('Principle-list');

    }
    function deleteteacher($id)
    {
    	 DB::table('teacher_info')->delete($id);
    	
    	 return redirect('Teacher-list');
    }
     function deleteadmin($id)
    {
    	 DB::table('admin')->delete($id);
    	
    	 return redirect('Addmission-list');
    }
    function deletestudent($id)
    {
         DB::table('student_info')->where('id','=',$id)->delete();
    	 return redirect('Student-list');
    }
    function adminupdate($id)
    {
        $user = DB::table('admin')->where('id',$id)->get();
         echo json_encode($user);
    }
      function adminUpdated($id)
    { 
    DB::table('admin')
            ->where('id', $id)
            ->update(['firstname' => $_POST['firstname'],'email' => $_POST['email'],'cnic' => $_POST['cnic'],'qualification' => $_POST['qualification'],'contact' => $_POST['contact']]);
    }



    
     function principleupdate($id)
    {
        $user = DB::table('principle')->where('id',$id)->get();
         echo json_encode($user);
    }




    function principleUpdated($id)
    { 
             DB::table('principle')
            ->where('id', $id)
            ->update(['firstname' => $_POST['firstname'],'email' => $_POST['email'],'cnic' => $_POST['cnic'],'qualification' => $_POST['qualification'],'contact' => $_POST['contact']]);
    }
    function addcomplain()
    {
        $_POST['token'] = $_POST['_token'];
        DB::table('complain')->insert(['addcomp' => $_POST['addcomp']]);
        return view('complain');
    }

    function getcomplain()
    {   

        $data = DB::table('complain')->get();
        return view('viewcomplain',['data' => $data]);
     


    }
    
   
}
