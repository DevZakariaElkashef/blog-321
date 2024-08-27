<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.auth.login');
    }
   
   
    public function registerPage()
    {
        return view('admin.auth.register');
    }


    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->route('admin.home');
        }

        session()->flash('error', 'Password is incorrect');
        return back();
    }


    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        // auth()->login($user);
        Auth::login($user, $request->has('remember'));

        return redirect()->route('admin.home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.loginPage');
    }
}
