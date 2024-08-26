<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('pages.auth.login');
    }

    public function login(Request $request){
        // Permet de valider les données obtenus via les champs
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentative de connexion avec les informations fournis par le formulaire
        if(Auth::attempt($request->only('email', 'password'))) {
            return redirect('/');
        }

        // Si la tentative echoue, on l'indique
        return back()->withErrors('Email or password is wrong');
    }
}
