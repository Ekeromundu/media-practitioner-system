<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    const USER_TYPE= 'admin';
    public function register()
    {
        return view('auth.register');
    }
    public function login()
    {
        return view('auth.login');
    }
    public function Post_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
                        
                return redirect()->to('/admin');
                    }
        return " wrong email or password";
    }
    public function createAdmin()
    {
        return view('auth.register');
    }
    public function storeAdmin()
    {
        User::create([
            'name' => request('name'),
            'email' => request('email'),
          
            'password' => bcrypt(request('password')),
            'user_type' => self::USER_TYPE,
            
            
        ]);
        //Auth::login($user);
        //$user->sendEmailVerificationNotification();

        return back();// response()->json('success');

    
        //return redirect()->route('verification.notice')->with('successMessage','Your account was created');
    }
    }


