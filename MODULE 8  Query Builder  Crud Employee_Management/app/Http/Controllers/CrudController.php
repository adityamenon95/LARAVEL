<?php

namespace App\Http\Controllers;

use App\Models\crud;
use Illuminate\Http\Request;
use DB;

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
    {   

        $request->validate
        (['image'=>'required',
        'username'=>'required',
        'email'=>'required',
        'phoneno'=>'required',
        'gender'=>'required',
        'skill'=>'required',
        'city'=>'required',
        'address'=>'required',]);

        $image=$request->file('image')->getClientOriginalName();
        //move_uploded_file
        $request->image->move(public_path('img'),$image);
        
        $username=$request->input('username');
        $email=$request->input('email');
        $phoneno=$request->input('phoneno');
        $gender=$request->input('gender');
        $checkboxdata=$request->input('skill');
        $skill=implode(',',$checkboxdata);
        $city=$request->input('city');
        $address=$request->input('address');
        
        
        DB::insert('insert into cruds(image,username,email,phoneno,gender,skill,city,address)values(?,?,?,?,?,?,?,?)',[$image,$username,$email,$phoneno,$gender,$skill,$city,$address]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $select=DB::select('SELECT * FROM  cruds');
        return view('View',['select'=> $select]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit=DB::select('SELECT * FROM cruds WHERE id =?',[$id]);
        return view('update',['edit'=>$edit]);
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
        'phoneno'=>'required',
        'gender'=>'required',
        'skill'=>'required',
        'city'=>'required',
        'address'=>'required',]);
        $image=$request->file('image')->getClientOriginalName();
        //move_uploded_file
        $request->image->move(public_path('img'),$image);
        
        $username=$request->input('username');
        $email=$request->input('email');
        $phoneno=$request->input('phoneno');
        $gender=$request->input('gender');
        $checkboxdata=$request->input('skill');
        $skill=implode(',',$checkboxdata);
        $city=$request->input('city');
        $address=$request->input('address');
        DB::update('UPDATE cruds SET image=?,username=?,email=?,phoneno=?,gender=?,skill=?,city=?,address=? WHERE id=? ',[$image,$username,$email,$phoneno,$gender,$skill,$city,$address,$id]);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete=DB::delete('DELETE FROM cruds WHERE id= ?',[$id]);
        return redirect('/');
    }
}
