<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //function d'affichage du login
    public function showLogin()
    {
        return inertia("Auth/Login");
    }

    //function d'authentification
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'validation.email' => 'Enter un adress email valide',
            'email.required' => 'Le champ email est obligatoire',
            'password.required' => 'Le champ mot de passe est obligatoire',
        ]);
        //verifier si l'utilisateur existe et si l'email correspond au mot de passe
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // route par defaut
            $defaultRoute = route('home');
            //stock la route de l'utilisateur lorsqu'il tente de ce connecter afin de le rédiriger une fois connecté
            $intendedRoute = redirect()->intended($defaultRoute)->getTargetUrl();
            return Inertia::location($intendedRoute);
        }
        return back()->withErrors([
            'error' => "Paramètres d'authentification incorrects",
        ]);
    }

    //logout de l'utilisateur
    public function logout()
    {
        Auth::logout();
        return Inertia::location("/");
    }














    //function d'affichage du register
    public function showRegister()
    {
        return inertia("Auth/Register");
    }
}
