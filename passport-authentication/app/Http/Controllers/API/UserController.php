<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function loginUser(Request $request): Response
    {
        $input = $request->all();

        // dd($input);

        Auth::attempt($input);

        $user = Auth::user();
        
        // dd(Auth::user());

        $token = $user->createToken('example')->accessToken;

        // dd($token);

        return Response(['status'=>200, 'token'=>$token], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function getUserDetails(Request $request): Response
    {
        if(Auth::guard('api')->check()){
            $user = Auth::user();
            return Response(['data' => $user], 200);
        }
        return Response(['data' => 'Unauthorised'], 401);
    }

    /**
     * Display the specified resource.
     */
    public function userLogout(Request $request): Response
    {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }

}
