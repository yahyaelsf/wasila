<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function showAdminLogin(Request $request)
    {
        return response()->view('cms.auth.login');
    }
    public function adminLogin(Request $request)
    {
        $validator = Validator($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6|max:15',
            'remember' => 'nullable|boolean',
        ]);
        $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];
        if (!$validator->fails()) {
            $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];
            if (Auth::guard('admin')->attempt($credentials, $request->get('remember'))) {
                return response()->json(['message' => 'Logged in successfully'], Response::HTTP_OK);
            } else {
                return response()->json(['message' => 'Error Credentials , please try agin !'], Response::HTTP_BAD_REQUEST);
            }
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }
    /////////////////////////////////////////////////////////////////////////
    public function showUserLogin(Request $request)
    {
        return response()->view('front.auth.login');
    }
    public function userLogin(Request $request){
        $validator = Validator($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string|min:6|max:15',
        ]);
        $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];
        if (!$validator->fails()) {
            if(Auth::guard('web')->attempt($credentials)) {
                return response()->json(['message' => 'Logged in successfully'], Response::HTTP_OK);
            } else {
                return response()->json(['message' => 'Error Credentials , please try agin !'], Response::HTTP_BAD_REQUEST);
            }
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first()
            ], Response::HTTP_BAD_REQUEST);
        }
    }

}
