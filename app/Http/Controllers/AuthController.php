<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $login_data = [
            'email' => $request->email,
            'password' => $request->password, 
        ];
        if (Auth::attempt($login_data)){
            return redirect()->route('dashboard');
        }
        return redirect()->back()->with('error', 'invalid email or password');
    }

    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route('frontsite.index');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function do_register(Request $request)
    {

        // dd($request);
        $user = new User();

        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'user is created');
    }
}
