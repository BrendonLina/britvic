<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        
        // if(Auth::check()){
            
        //     return view('dashboard');
        // }

        if(session()->has('logado')){
            return view('dashboard');
        }

        return view('login');
        
    }

    public function dashboard(Request $request)
    {
    

    $credentials = $request->validate([
        'email' => 'required', 'email',
        'password' => 'required',
    ],[
        'email.required' => 'email é obrigatório.', 
        'password.required' => 'Senha é obrigatoria.', 
        
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        $request->session()->put("logado",[
            'logado' => $credentials,  
        ]);
        // return redirect()->intended('dashboard');
        return view('dashboard', compact('credentials'));
    }

    if(!auth()->check()){
        return redirect()->route('login');
    }
    else{
        return view('dashboard');
    }

    return redirect()->back()->with('danger', 'Email ou senha inválida.');
}

    

    public function logout()
    {
        // auth()->logout();
        session()->forget('logado');

        return view('index');
    }
}
