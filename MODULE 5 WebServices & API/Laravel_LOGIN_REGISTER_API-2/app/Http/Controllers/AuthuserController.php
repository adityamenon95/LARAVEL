<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\authuser;
use Illuminate\Support\Facades\Hash;

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
        

        $user = authuser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['user' => $user], 201);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $user =authuser::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid login credentials'], 401);
        }

        // Normally you would generate a token here, but since we are not using middleware,
        // we will just return the user.
        return response()->json(['user' => $user], 200);
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
