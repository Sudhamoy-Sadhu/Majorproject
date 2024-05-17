<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function loginAttempt(Request $request){
        $credentials = $request->only(['email','password']);
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email' => 'invalid credentials']);

    }
    public function loginuser(){
        return view('auth.loginstaff');
    }
    public function loginAttempt2(Request $request){
        $credentials = $request->only(['email','password']);
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email' => 'invalid credentials']);

    }
    public function register(){
        return view('auth.register');
    }
    public function registerAttempt(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required | unique:users',
            'password'=>'required | min:8',
        ]);
    
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
    
        Auth::login($user);
    
        return redirect()->route('dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
