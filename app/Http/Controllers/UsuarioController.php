<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Veiculo;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $usuario = new Usuario;
        
        $usuario->nome = $request->nome;
        $usuario->cpf = $request->cpf;
        $usuario->veiculo_id = $request->veiculo_id;
        
        $usuario->save();

        return view('cadastrarusuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $usuarios = Usuario::all();

        return view('listarusuarios', compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$usuario = Usuario::find($id)){
            return redirect()->route('listar.veiculos');
        }

        return view('editarusuario', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);

        $usuario->nome = $request->nome;
        $usuario->cpf = $usuario->cpf;
    
        $usuario->update();

        return "Dados alterados com sucesso!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::findOrFail($id)->delete();

        return "Veiculo removido com sucesso!";
    }

    public function cadastrarUsuario()
    {
        $veiculos = Veiculo::all();
        $usuarios = Usuario::all();

        return view('cadastrarusuario', compact('veiculos','usuarios'));
    }
}
