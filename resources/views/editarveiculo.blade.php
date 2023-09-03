<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Editar veiculo {{ $veiculo->modelo }}</title>
</head>
<body>
    <form action="#" method="POST">
        @csrf
        @method('PUT')

        <input type="text" placeholder="Modelo" name="modelo" value="{{ $veiculo->modelo }}">
        <input type="text" placeholder="Marca" name="marca" value="{{ $veiculo->marca }}">
        <select name="ano">
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2012">2022</option>
            <option value="2013">2023</option>
        </select>
        <input type="text" placeholder="Placa" name="placa" value="{{ $veiculo->placa }}">
        <input type="submit" name="cadastrar" value="Cadastrar">
        <a href="{{route('dashboard')}}">voltar</a>
    </form>
</body>
</html>