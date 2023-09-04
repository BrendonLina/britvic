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

    @if(session('danger'))
          <div class="alert alert-danger">
              {{session('danger')}}
          </div>
      @endif

      @if(session('success'))
          <div class="alert alert-success">
              {{session('success')}}
          </div>
      @endif
    @if(count($veiculos) > 0)
    @foreach($veiculos as $veiculo)
        <form method="GET" action="/editarveiculo/{{ $veiculo->id }}">
            @csrf
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{$veiculo->id}}</th>
                        <td>{{$veiculo->marca}} - {{$veiculo->modelo}}</td>
                        <td><button type="submit" name="editar" class="btn btn-warning">Editar</button></td>
                    </form>
                    <form method="POST" action="/deletarveiculo/{{ $veiculo->id }}">
                        @csrf
                        @method('DELETE')

                        <td><button type="submit" name="excluir" class="btn btn-danger">Deletar</button></td>
                    </form>
                    </tr>
                    </tbody>
                </table>
    @endforeach
    @else
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Editar</th>
            <th scope="col">Deletar</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">--</th>
            <td>--</td>
            <td>--</td>
            <td>--</td>
          </tr>
          <tr>
        </tbody>
      </table>

    @endif
    <a href="{{route('login')}}">Voltar</a>
</body>
</html>