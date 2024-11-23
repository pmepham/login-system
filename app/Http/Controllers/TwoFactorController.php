<?php
namespace App\Http\Controllers;
use App\Helpers\Helper;
use App\Http\Requests\TwoFactorRequest;
use App\Models\TwoFactorToken;
use Auth;
use Crypt;
use Illuminate\Http\Request;
use Log;

class TwoFactorController{

    public function index(Request $request){
        $id = $request->attributes->get('encrypted_id');
        return view('auth.2fa', ['id' => $id]);
    }

    public function attempt(TwoFactorRequest $request){
        $validated = $request->validated();
        $id = $request->attributes->get('decrypted_id');
        Log::info($validated);

        $twoFactorToken = TwoFactorToken::findOrFail($id);
        Log::info($twoFactorToken);
        if($validated['authentication_code'] == Crypt::decrypt($twoFactorToken->token)){
                Auth::loginUsingId($twoFactorToken->id);
                $request->session()->regenerate();
                return response()->json(['success' => true, 'redirect' => route('dashboard')]);
            }

        return response()->json(['success' => false, 'error' => 'Authentication code incorrect'], 401);
    }

}

?>