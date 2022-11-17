<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function displayLogin()
    {
        return view('auth.login');
    }
    public function displayRegister()
    {

        return view('auth.register');
    }


    public function register(Request $request)
    {

        // validation du formulaire
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',

        ]);
        // 'picture' => 'image|mimes:png,jpg,svg'
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
        return redirect()->route('view.login', ['email' => $user->email]);
    }
    public function login(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            //    Auth::user() permet de recuperer les informations de l'utlisateur authentifie
            $user = Auth::user();

            if ($user->role === "Admin") {
                return redirect()->route('view.admin.home');
            } else {
                return redirect()->route('view.home');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}