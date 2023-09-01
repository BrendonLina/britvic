<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alugar Carro</title>
</head>
<body>
    @foreach ($veiculos as $veiculo )
        
    <form action="/alugarveiculo/{{$veiculo->id}}" method="POST">
    @endforeach
       
        @csrf
        @method('PUT')
        <input type="text" placeholder="Nome" name="nome">
        <input type="text" placeholder="CPF" name="cpf">

        <select name="veiculo_id" id="veiculo_id">
            @foreach($veiculos as $veiculo)
                <option value="{{$veiculo->id}}">{{$veiculo->modelo}} - {{$veiculo->marca}} - {{$veiculo->ano}} </option>
             @endforeach
        </select>
        <input type="date" name="reserva">
        <input type="submit" name="cadastrar" value="Cadastrar">
        <a href="{{route('dashboard')}}">voltar</a>
    </form>
</body>
</html>