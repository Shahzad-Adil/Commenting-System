<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $data = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            if(!Auth::attempt($data)){
                return response()->json([
                    'status' => false,
                    'message' => 'Credetials not match.'
                ]);
            }

            return response()->json([
                'status' => true,
                'message' => 'Login successfull!'
            ]);


        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong.'
            ]);
        }

    }
}
