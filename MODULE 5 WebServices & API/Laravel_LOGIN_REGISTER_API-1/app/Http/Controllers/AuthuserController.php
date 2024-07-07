<?php
namespace App\Http\Controllers;
use App\Models\authuser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class AuthuserController extends Controller
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
    public function register(Request $request)
    {
       $input = $request->all();
       
       authuser::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'password' => Hash::make($input['password'])
      ]);

          return response()->json(['status' => true,
                                    'message' => "Registation Success"   
        
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
   
     public function login(Request $request)
     {
 
      $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
         ]);
         
         if (Authuser::attempt($credentials)) 
         {
            return response()->json([ 'status' => true ,
                                      'message' => "Success"
         ]);
         }
             return response()->json(['status' => false ,
                                      'message' => "Fail"
         
         ]);
        }
    /**
     * Display the specified resource.
     */
    public function show(authuser $authuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(authuser $authuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, authuser $authuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(authuser $authuser)
    {
        //
    }
}
