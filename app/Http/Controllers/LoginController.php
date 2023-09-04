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

        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        
        ],[
             'email.required' => 'nome é obrigatório.', 
             'password.required' => 'Senha é obrigatoria.', 
             
        ]);


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

            return view('dashboard');
            
        } else{

            return redirect()->back()->with('danger', 'Email ou senha inválida.');
    
        }

    }

    public function logout()
    {
        auth()->logout();

        return view('index');
    }
}
