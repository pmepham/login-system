<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function attempt(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            // Authentication passed, regenerate session to avoid fixation attacks
            $request->session()->regenerate();
            return response()->json(['success' => true, 'redirect' => route('dashboard')]);
        }

        return response()->json(['success' => false, 'error' => 'Your email or password is incorrect'], 401);
    }
}
