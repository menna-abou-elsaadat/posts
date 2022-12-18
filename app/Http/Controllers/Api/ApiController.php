<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        if (!Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
            return response()->json([
                'success'=>false,
                'status'=>200,
            ]);
        }

        $user = auth()->user();
        $token = $user->createToken('token');
        return $token->plainTextToken;
    }
}
