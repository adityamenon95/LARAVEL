<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
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
    public function upload(Request $request)
    {  
         $user=new gallery();
        $image=$request->file('image')->getClientOriginalName();
        $request->image->move(public_path('images'),$image);
        $user->image=$image;
        $user->save();
        return redirect('/ADMIN/adminhome');


    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $select=gallery::all();
        return view('USER/gallery',(['select'=>$select]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gallery $gallery)
    {
        //
    }
}
