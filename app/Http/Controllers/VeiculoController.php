<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

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
        $veiculo = new Veiculo;

        $veiculo->modelo = $request->modelo;
        $veiculo->marca = $request->marca;
        $veiculo->ano = $request->ano;
        $veiculo->placa = $request->placa;

        $veiculo->save();

        return view('cadastrarveiculo');
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

        $veiculos = Veiculo::all();

        return view('alugarveiculo', compact('veiculos'));
    }

    public function alugarVeiculoStore(Request $request){
        
        dd($request->all());
    }
}
