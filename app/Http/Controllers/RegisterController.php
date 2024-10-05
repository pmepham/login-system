<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Auth;
use Hash;

class RegisterController
{
    public function index(){
        return view('auth.register');
    }

    public function attempt(RegisterRequest $request){
        $credentials = $request->validated();

        $exists = User::where('email', $credentials['email'])->exists();

        if(!$exists){
            //lets create the account
            $credentials['password'] = Hash::make($credentials['password']);
            $user = User::create($credentials);
            $request->session()->regenerate();
            Auth::loginUsingId($user->id);
            return response()->json(['success' => true, 'redirect' => route('dashboard')]);
        }

        return response()->json(['success' => false, 'error' => 'Registration unsuccessful.<br>Please check your details or try logging in if you already have an account.'], 401);
    }

}
