<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        if(Auth::check()){

            return view('dashboard');
        }
        return view('login');
    }

    public function dashboard(Request $request){

  
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);


        if(Auth::attempt($credenciais)){

            $request->session()->regenerate();

            if(Auth::check()){

                return view('dashboard');
            }
            
            // return redirect()->intended('dashboard');

            // return redirect()->route('dashboard')->with('success', 'Logado');
            return view('dashboard');
            
        } else{
            // return redirect()->back()->with('erro', 'Email ou senha inválida.');
            dd("não logou");
        }

    }

    public function logout()
    {
        auth()->logout();

        return view('index');
    }
}
