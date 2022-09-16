<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticationRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function login(AuthenticationRequest $request){
        //find cherche par id et where cherche ?
        $user = User::where('email', $request->email)->first();
        if(Hash::check($request->password,$user->password)){
            return response()->json([
            "accessToken" => $user->createToken('password')->accessToken,
            ]);
        }
        return response()->json([
            "message"=> "error in login"
        ], 401);
    }
    public function logout()
{
    
   $r = Auth::user()->token()->revoke();
   if($r){
    return response()->json([
        'message' => 'Successfully logged out'
    ],200);
   }
   return response()->json([
        "error"=> "error in login"
    ], 401);
    
}

public function My(){
    $user = User::find(auth()->user()->id);
    if(!$user){
        abort(401);
    }
    return $user;
}
}
