<?php

namespace App\Http\Controllers;

use App\Helpers\EncryptionHelper;
use App\Mail\TwoFactorAuth;
use App\Models\TwoFactorToken;
use Auth;
use App\Http\Requests\LoginRequest;
use Crypt;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

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
            $user = Auth::user();
            // Authentication passed, regenerate session to avoid fixation attacks
            if($user->_2fa){
                //delete previous 2fa for this user
                TwoFactorToken::where('user_id', $user->id)->delete();
                //delete all expired 2fa in the database //this would probs be better in in a job
                TwoFactorToken::where('expires_at', '<=', Carbon::now())->delete();
                $token = rand(10000, 99999);
                $expiry = Carbon::now()->addMinutes(5);
                $twoFactorToken = TwoFactorToken::create([
                    'user_id' => $user->id, 
                    'token' => Crypt::encrypt($token), 
                    'expires_at' => $expiry
                ]);
                $id = EncryptionHelper::encrypt($twoFactorToken->id);
                Mail::to($user->email)->send(new TwoFactorAuth($token));
                return response()->json(['success' => true, 'redirect' => route('2fa', ['id' => $id])]);
            }
            $request->session()->regenerate();
            return response()->json(['success' => true, 'redirect' => route('dashboard')]);
        }

        return response()->json(['success' => false, 'error' => 'Your email or password is incorrect'], 401);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
