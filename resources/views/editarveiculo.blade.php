<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Editar veiculo</title>
</head>
<body>

    <div class="container">
        <h1>Editar Veiculo {{ $veiculo->modelo }} {{$veiculo->marca}}</h1>
  
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
        
        <form action="#" method="POST" class="row g-3">
            @csrf
            @method('PUT')

          <div class="col-md-6">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" value="{{ $veiculo->marca }}">
            
              @error('marca')
                  <span>{{ $message }}</span>
              @enderror
          </div>
          <div class="col-md-6">
            <label for="marca" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo" value="{{ $veiculo->modelo }}">
              @error('modelo')
                  <span>{{ $message }}</span>
              @enderror
          </div>
          <div class="col-md-6">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa" value="{{ $veiculo->placa }}">
              @error('placa')
                  <span>{{ $message }}</span>
              @enderror
          <div class="col-md-6">
            <select name="ano" class="form-select my-2">
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
              @error('ano')
                  <span>{{ $message }}</span>
              @enderror
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Alterar</button>
            <a href="{{route('dashboard')}}">voltar</a>
          </div>
        </form>
      </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html>
