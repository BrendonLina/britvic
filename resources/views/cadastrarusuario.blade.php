<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar usuario</title>
</head>
<body>
    <form action="{{route('cadastrar.usuario')}}" method="POST">
        @csrf
        <input type="text" placeholder="Nome" name="nome">
        <input type="text" placeholder="CPF" name="cpf">
        <input type="submit" name="cadastrar" value="Cadastrar">
        <a href="{{route('dashboard')}}">voltar</a>
    </form>
</body>
</html>