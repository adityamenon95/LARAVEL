<?php

namespace App\Http\Controllers;

use App\Models\auth;
use Illuminate\Http\Request;
use DB;
use Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
       $email=$request->input('email');
       $password=$request->input('password');
       $role=$request->input('role');
       $checklogin=DB::table('auths')->where(['email'=>$email,'password'=>$password,'role'=>$role])->get();
       if(count($checklogin)>0)
       {
        if($role=='Admin')
        {
         $request->session()->put('username',$email);
         return redirect('ADMIN/adminhome');
        }
        elseif($role=='User')
        {
         $request->session()->put('username',$email);
         return redirect('USER/userhome');
        }
        
       }
       else
       {
        echo('invalid credentials');
       }
    }
    

    public function register(Request $request)
    {   $request->validate
        (['image'=>'required',
        'username'=>'required',
        'email'=>'required',
        'password'=>'required',
        'role'=>'required', ]);
        $user=new auth;
        $image=$request->file('image')->getClientOriginalName();
        //move_uploded_file
        $request->image->move(public_path('img'),$image);
        $user->image=$image;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->role=$request->role;
        $user->save();
        return redirect('/');
    }
    /**
     * Display the specified resource.
     */
    public function logout()
    {
       Session::flush();
       return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(auth $auth)
    {
        //
    }
}
