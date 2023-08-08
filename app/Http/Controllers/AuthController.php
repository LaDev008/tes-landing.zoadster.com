<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register()
    {
        return view('register');
    }

    public function storeRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|max:255|min:8|confirmed',
            'phone_number' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'role_id' => 6,
        ]);

        Auth::login($user);
        $request->session()->regenerate();


        return redirect()->back();
    }

    public function login()
    {
        return view('login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role_id == 6) {
                return redirect()->back();
            } else {
                return redirect()->intended('/admin/dashboard');
            }
        }

        return back()->withErrors([
            'username' => "Username Atau Password Salah, Silahkan Coba Lagi",
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->back();
    }
}
