<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuario {{ $usuario->nome }}</title>
</head>
<body>
    <form action="#" method="POST">
        @csrf
        @method('PUT')

        <input type="text" placeholder="Nome" name="nome" value="{{ $usuario->nome }}">
        <input type="text" placeholder="CPF" name="cpf" value="{{ $usuario->cpf }}" disabled="">
    
        <input type="submit" name="cadastrar" value="Alterar">
        <a href="{{route('dashboard')}}">voltar</a>
    </form>
</body>
</html>