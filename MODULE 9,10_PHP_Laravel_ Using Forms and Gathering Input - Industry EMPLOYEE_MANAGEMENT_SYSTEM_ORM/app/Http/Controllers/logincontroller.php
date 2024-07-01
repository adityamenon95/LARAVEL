<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class logincontroller extends Controller
{
    public function login(Request $request)
    {
       $email=$request->input('email');
       $password=$request->input('password');
       $role=$request->input('role');
       $checklogin=DB::table('cruds')->where(['email'=>$email,'password'=>$password,'role'=>$role])->get();
       if(count($checklogin)>0)
       {
        if($role=='Admin')
        {
         $request->session()->put('username',$email);
         return redirect('Admin/Blog');
        }
        elseif($role=='Employee')
        {
         $request->session()->put('username',$email);
         return redirect('Employee/Search');
        }
        
       }
       else
       {
        echo('invalid credentials');
       }
    }

}

