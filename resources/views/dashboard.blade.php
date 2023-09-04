<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
  @if(session()->has('success'))
    {{session()->get('success')}}
  @endif
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/dashboard">BRITVIC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('cadastrar.veiculo')}}">Cadastrar veiculo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('listar.veiculos')}}">Listar Veiculos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('cadastrar.usuario')}}">Cadastrar Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('listar.usuarios')}}">Listar Usuarios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('logout')}}">Sair</a>
            </li>
            @if(auth()->check())
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Logado</a>
              </li>
              @endif
          </ul>
        </div>
      </nav>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
