<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Cadastrar usuario</title>
</head>
<body>
    <div class="container">
      <h1>Cadastro de Usuario</h1>

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
      
      <form action="{{route('cadastrar.usuario')}}" method="POST" class="row g-3">
        @csrf
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo">
            @error('nome')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
          <label for="cpf" class="form-label">CPF</label>
          <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF">
            @error('cpf')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="cpf" class="form-label">Data</label>
            <input type="date" class="form-control" id="reserva" name="reserva">
          </div>
        <div class="col-md-6">
          <label for="veiculo" class="form-label">Veiculo</label>
          <select class="form-select" id="veiculo_id" name="veiculo_id">
            <option selected>Selecione um veiculo</option>
            @foreach($veiculos as $veiculo)
                <option value="{{$veiculo->id}}">{{$veiculo->modelo}} - {{$veiculo->marca}} - {{$veiculo->ano}} </option>
             @endforeach
          </select>
            @error('veiculo_id')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
          <a href="{{route('dashboard')}}">voltar</a>
        </div>
      </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
  </html>
