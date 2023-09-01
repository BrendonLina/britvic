<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alugar Carro</title>
</head>
<body>
    <form action="{{route('alugar.veiculo.store')}}" method="POST">
        @csrf
        <input type="text" placeholder="Nome" name="nome">
        <input type="text" placeholder="CPF" name="cpf">

        <select name="veiculos" id="veiculos">
            @foreach($veiculos as $veiculo)
                <option value="{{$veiculo->marca}}">{{$veiculo->marca}}</option>
                {{-- <option value="{{$veiculo->modelo}}">{{$veiculo->modelo}}</option> --}}
             @endforeach
        </select>
        <input type="date" name="date">
        <input type="submit" name="cadastrar" value="Cadastrar">
        <a href="{{route('dashboard')}}">voltar</a>
    </form>
</body>
</html>