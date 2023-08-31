<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veiculos</title>
</head>
<body>
    @foreach($veiculos as $veiculo)

        <p>{{ $veiculo->marca }}<a href="{{route('editar.veiculo', $veiculo->id)}}">Editar</a></p>

    @endforeach
</body>
</html>