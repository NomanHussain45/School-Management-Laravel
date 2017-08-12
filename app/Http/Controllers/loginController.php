<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
  //singleton or session
    function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];


        $check = DB::table('login')
                        ->where('username',$username)
                        ->where('password',$password)
                        ->where('role',$role)
                        ->get();

       if(count($check) > 0 ){

          
          DB::table('login')->where('username',$username)->update(['is_loggedin' => 1]);  
          session(['login'=> $username,'role' => $role,'id' => $check[0]->id,'loginstatus'=> TRUE]);
          
             return redirect('/Main');
             exit;

       }

       else
       {
            $response =  array('error' => 'ok', 'msg' => 'Invalid' );
            return view('/login',$response);
       }
      
    }
    function sessiontest(Request $request)
    {
      $data = $request->session()->all();
      return $data;
    }
    function blank()
    {
      if(session('loginstatus') == TRUE)
      {
         return view('blank');  
        
      }
      else
      {
     return redirect('/');
      }
      
    }
    function loginpage()
    {
      if(session('loginstatus') == TRUE)
      {
        return redirect('/Main');
      }
      else
      {
        return view('login');  
      }
      
    }
    public function Logout(){
      $data = DB::table('login')->where('is_loggedin',1)->update(['is_loggedin' => 0]);
        session()->flush();
        return redirect('/');
      
    }
    function addstaff()
    {
      if(session('loginstatus') == TRUE)
      {
      return view('Staff');
    }
    else
    {
      return redirect('/');
    }
    }
// Facade starts

    function staff($action)
    {
      if($action == 'add')
      {
       if(session('loginstatus') == TRUE)
      {
         return redirect('/Staff-Add');  
        
      }
      else
      {
     return redirect('/');
      } 
      }
      elseif($action == 'manage')
      {
        if(session('loginstatus') == TRUE)
      {
         return redirect('/Staff-list');
        
      }
      else
      {
     return redirect('/');
      } 
      }
      
      
    }
    // facade Ends








    // function teacher_main()
    // {
    //   if(session('loginstatus') == TRUE)
    //   {
    //     return redirect('/Teacher');
    //   }
    //   else {
    //       return view('login');
    //   }
      
    // }
    // function student_main()
    // {
    //   if(session('loginstatus') == TRUE)
    //   {
    //     return redirect('/Student');
    //   }
    //   else
    //   {
    //     return view('login');
    //   }
    // }
    // function class_main()
    // {
    //   if(session('loginstatus') == TRUE)
    //   {
    //      return redirect('/Class');
    //   }
    //   else
    //   {
    //      return view('login');
    //   }
    // }
    // function subject_main()
    // {
    //   if(session('loginstatus') == TRUE)
    //   {
    //      return redirect('/Subject');
    //   }
    //   else
    //   {
    //      return view('login');
    //   }
    // }

    // function section()
    // {
    //   if(session('loginstatus') == TRUE)
    //   {
    //      return redirect('/Section');
    //   }
    //   else
    //   {
    //      return view('login');
    //   }

    // }
    // function admin_main()
    // {
    //    if(session('loginstatus') == TRUE)
    //   {
    //      return redirect('/Admin');
    //   }
    //   else
    //   {
    //      return view('login');
    //   }
    // }
    // function principle_main()
    // {
    //   if(session('loginstatus') == TRUE)
    //   {
    //      return redirect('/Admin');
    //   }
    //   else
    //   {
    //      return view('login');
    //   }

    // }

   
}
