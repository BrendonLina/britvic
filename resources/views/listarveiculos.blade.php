<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Veiculos</title>
</head>
<body>

        @foreach($veiculos as $veiculo)
            <form method="GET" action="/editarveiculo/{{ $veiculo->id }}">
                @csrf
                @method('PUT')
                <p>{{$veiculo->marca}}</p>
                <button class="btn btn-primary" id="btn-primary" type="submit" name="editar">Editar</button>
            </form>
            <form method="POST" action="/deletarveiculo/{{ $veiculo->id }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary" id="btn-primary" type="submit" name="deletar">Deletar</button>
            </form>

        @endforeach

        <a href="{{route('dashboard')}}">voltar</a>
</body>
</html>