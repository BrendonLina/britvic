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
     * 
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
        
        $this->validate($request,[
            'nome' => 'required|min:3|max:20',
            'cpf' => 'unique:usuarios|max:20|required',
            'veiculo_id' => 'numeric',
        
        ],[
             'nome.required' => 'nome é obrigatório.', 
             'nome.min' => 'Minimo de 3 letras.', 
             'nome.max' => 'Maximo de 20 letras.', 
             'cpf.required' => 'cpf é obrigatório.', 
             'cpf.max' => 'limite de numeros no cpf.', 
             'cpf.unique' => 'cpf já utilizado.', 
             'veiculo_id.numeric' => 'Por favor selecione um veiculo.', 
             
        ]);


        $usuario = new Usuario;
        
        $usuario->nome = $request->nome;
        $usuario->cpf = $request->cpf;
        $usuario->veiculo_id = $request->veiculo_id;
        
        $usuario->save();

        return redirect()->back()->with('success', 'Usuario cadastrado com sucesso');
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

        $this->validate($request,[
            'nome' => 'required|min:3|max:20',
            'cpf' => 'unique:usuarios|max:20|',
            'veiculo_id' => 'numeric',
        
        ],[
             'nome.required' => 'nome é obrigatório.', 
             'nome.min' => 'Minimo de 3 letras.', 
             'nome.max' => 'Maximo de 20 letras.', 
             'cpf.required' => 'cpf é obrigatório.', 
             'cpf.max' => 'limite de numeros no cpf.', 
             'cpf.unique' => 'cpf já utilizado.', 
             'veiculo_id.numeric' => 'Por favor selecione um veiculo.', 
             
        ]);

        $usuario = Usuario::find($id);

        $usuario->nome = $request->nome;
        $usuario->cpf = $usuario->cpf;
        if($usuario->cpf == "" || $usuario->cpf != $usuario->cpf ){
            return redirect()->back()->with('danger', 'CPF NÃO PREENCHIDO/DIFERENTE DA BASE');
        }
        $usuario->update();

        return redirect()->back()->with('success', 'Usuario alterado com sucesso');
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

        return redirect()->route('listar.usuarios')->with('success','Usuario deletado com sucesso');
    }

    public function cadastrarUsuario()
    {
        $veiculos = Veiculo::all();
        $usuarios = Usuario::all();

        return view('cadastrarusuario', compact('veiculos','usuarios'));
    }
}
