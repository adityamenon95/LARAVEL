<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class CrudController extends Controller
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
    public function store(Request $request)
    {   $request->validate
        (['image'=>'required',
        'username'=>'required',
        'email'=>'required',
        'password'=>'required',
        'phoneno'=>'required',
        'gender'=>'required',
        'skill'=>'required',
        'city'=>'required',
        'address'=>'required',
        'role'=>'required', ]);
        $user=new crud;
        $image=$request->file('image')->getClientOriginalName();
        //move_uploded_file
        $request->image->move(public_path('img'),$image);
        $user->image=$image;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->phoneno=$request->phoneno;
        $user->gender=$request->gender;
        //save checkbox
         $checkboxdata=$request->input('skill');
        $user->skill=implode(',',$checkboxdata);
        $user->city=$request->city;
        $user->address=$request->address;
        $user->role=$request->role;
        $user->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $search=crud::paginate(1);
        return view('Employee/Search',(['search'=>$search]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit=crud::find($id);
        return view('Employee/Update',(['edit'=>$edit]));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {   
        $request->validate
        (['image'=>'required',
        'username'=>'required',
        'email'=>'required',
        'password'=>'required',
        'phoneno'=>'required',
        'gender'=>'required',
        'skill'=>'required',
        'city'=>'required',
        'address'=>'required',
        'role'=>'required', ]);
        $user=crud::find($id);
        $image=$request->file('image')->getClientOriginalName();
        //move_uploded_file
        $request->image->move(public_path('img'),$image);
        $user->image=$image;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->phoneno=$request->phoneno;
        $user->gender=$request->gender;
        //save checkbox
         $checkboxdata=$request->input('skill');
        $user->skill=implode(',',$checkboxdata);
        $user->city=$request->city;
        $user->address=$request->address;
        $user->role=$request->role;
        $user->save();
        return redirect('Employee/Search');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        crud::destroy($id);
        return redirect('Employee/Search');
    }

    public function search(Request $request)
    {   $username=$request->input('username');
        $email=$request->input('email');
        $search=crud::where('username','LIKE','%'.$username.'%')->where('email','LIKE','%'.$email.'%')->paginate(2);
        return view('Employee/Search',(['search'=>$search]));
    }
}
