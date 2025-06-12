<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLogin()  {
        return view('auth.login');
    }

    public function checkLogin() {
        
     $aUser = request()->validate([
            'email' => ['required', 'max:255'],
            'password' => ['required', 'min:8'],
        ]);
        // attempt to login
        if (! Auth::attempt($aUser)) {
            throw ValidationException::withMessages([
                'email' => 'Unmatch credentials',
            ]);
        }else
        {
            abort(404); 
        }

        // generate session
        request()->session()->regenerate();

        return redirect('/index'); 
    }


    public function showRegister()  {
        return view('auth.register');
    }


    public function register()  {
        $aValidateUser = request()->validate([
            'email' => ['required', 'unique:users,email'],
            'email_confirmation' => ['required', 'same:email'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required','min:8', 'same:password']
        ]);
        

        // create user
        $oUser = User::create($aValidateUser);
        
        // login
        Auth::login($oUser);
        // redirect on Login
        return redirect('/');
    }
    
    public function showForgetPw()  {
        return view('auth.forget-pw');
    }
}
