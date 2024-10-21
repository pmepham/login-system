<?php
namespace App\Http\Controllers;
use App\Http\Requests\TwoFactorRequest;

class TwoFactorController{

    public function index(){
        return view('auth.2fa');
    }

    public function attempt(TwoFactorRequest $request){
        $validated = $request->validated();
        
    }

}

?>