<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Usuarios</title>
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
      
    @foreach($usuarios as $usuario)
        <form method="GET" action="/editarusuario/{{ $usuario->id }}">
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
                        <th scope="row">{{$usuario->id}}</th>
                        <td>{{$usuario->nome}}</td>
                        <td><button type="submit" name="editar" class="btn btn-warning">Editar</button></td>
                    </form>
                    <form method="POST" action="/deletarusuario/{{ $usuario->id }}">
                        @csrf
                        @method('DELETE')

                        <td><button type="submit" name="excluir" class="btn btn-danger">Deletar</button></td>
                    </form>
                    </tr>
                    </tbody>
                </table>
    @endforeach
        {{-- @foreach($usuarios as $usuario)
            <form method="GET" action="/editarusuario/{{ $usuario->id }}">
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

        <a href="{{route('dashboard')}}">voltar</a> --}}
</body>
</html>