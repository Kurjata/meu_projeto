<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Validação fictícia - aceita qualquer login
        if ($request->email && $request->password) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['login_failed' => 'Credenciais inválidas.']);
    }
}
