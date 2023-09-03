<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use App\Models\Usuario;
use App\Models\Reserva;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
            'modelo' => 'required|min:3|max:20',
            'marca' => 'min:3|max:20|required',
            'ano' => 'numeric|required',
            'placa' => 'required'
        
        ],[
             'modelo.required' => 'modelo é obrigatório.', 
             'modelo.min' => 'Minimo de 3 letras.', 
             'modelo.max' => 'Maximo de 20 letras.', 
             'marca.required' => 'marca é obrigatório.', 
             'marca.max' => 'limite maximo de 20 caracteres.', 
             'marca.min' => 'limite minimo de 3 caracteres.', 
             'placa.required' => 'Por favor digite a placa.',
             'ano.required' => 'ano é obrigatório.',
             'ano.numeric' => 'selecione uma data.', 
             
        ]);

        $veiculo = new Veiculo;

        $veiculo->modelo = $request->modelo;
        $veiculo->marca = $request->marca;
        $veiculo->ano = $request->ano;
        $veiculo->placa = $request->placa;
        $veiculo->reserva = null;

        $veiculo->save();

        // return view('cadastrarveiculo');
        return redirect()->back()->with('success', 'Veiculo cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $veiculos = Veiculo::all();

        return view('listarveiculos', compact('veiculos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$veiculo = Veiculo::find($id)){
            return redirect()->route('listar.veiculos');
        }

        return view('editarveiculo', compact('veiculo'));
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
        $veiculo = Veiculo::find($id);

        $veiculo->modelo = $request->modelo;
        $veiculo->marca = $request->marca;
        $veiculo->ano = $request->ano;
        $veiculo->placa = $request->placa;

        $veiculo->update();

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
        Veiculo::findOrFail($id)->delete();

        return "Veiculo removido com sucesso!";
    }

    public function cadastrarVeiculo(){

        return view('cadastrarveiculo');
    }

    public function alugarVeiculo(){


        $veiculos = Veiculo::where('modelo', '<>' , null)->orderBy('modelo')->get();
        return view('alugarveiculo', compact('veiculos'));
    }

    public function alugarVeiculoStore(Request $request, $id){

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
        
        $nome = $request->nome;
        $cpf = $request->cpf;
        // $reserva = $request->reserva;
    
        $usuario = new Usuario;
        $usuario->nome = $nome;
        $usuario->cpf = $cpf;
        $usuario->veiculo_id = $request->veiculo_id;

        $usuario->save();

        $usuario_id = $usuario->id;

        $veiculos = Veiculo::find($id);
        
        $veiculos->reserva = $request->reserva;
        $veiculos->modelo = $veiculos->modelo;
        $veiculos->marca = $veiculos->marca;
        $veiculos->ano = $veiculos->ano;
        $veiculos->placa = $veiculos->placa;
        // $veiculos->usuario_id = $usuario_id;
        
        $veiculos->update();

        return redirect()->back()->with('success', 'Reserva realizada com sucesso');

        

    
    }
}
