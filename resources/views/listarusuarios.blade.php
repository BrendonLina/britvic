<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
</head>
<body>

        @foreach($usuarios as $usuario)
            <form method="POST" action="/editarusuario/{{ $usuario->id }}">
                @csrf
                @method('PUT')
                <p>{{$usuario->nome}}</p>
                <button class="btn btn-primary" id="btn-primary" type="submit" name="editar">Editar</button>
            </form>
            <form method="POST" action="/deletarusuario/{{ $usuario->id }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary" id="btn-primary" type="submit" name="deletar">Deletar</button>
            </form>  

        @endforeach

        <a href="{{route('dashboard')}}">voltar</a>
</body>
</html>