<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests\LoginRequest;

class LoginController
{
    public function index()
    {
        return view('auth.login');
    }

    public function attempt(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::once($credentials)) {
            // Authentication passed, regenerate session to avoid fixation attacks
            if(Auth::user()->_2fa){
                return response()->json(['success' => true, 'redirect' => route('2fa') ]);
            }
            $request->session()->regenerate();
            return response()->json(['success' => true, 'redirect' => route('dashboard') ]);
        }

        return response()->json(['success' => false, 'error' => 'Your email or password is incorrect'], 401);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
