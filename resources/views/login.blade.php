<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-auto w-50 form-medico">
                <form action="{{route('dashboard')}}" method="post">
                    @csrf

                    <h3 class="row justify-content-center align-items-center">Login</h3>

                    @if(session('danger'))
                        <div class="alert alert-danger">
                            {{session('danger')}}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col my-1">
                            <input type="email" placeholder="Email" id="email" name="email" class="form-control">
                                @error('email')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="col my-1">
                            <input type="password" placeholder="Senha" id="password" name="password" class="form-control">
                                @error('password')
                                    <span>{{ $message }}</span>
                                @enderror
                        </div>    
                    </div>

                    <div class="row">
                        <div class="d-grid gap-2 mt-2">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <a href="/" class="voltar">Voltar</a>
                        </div>
                    </div>

                </form> 
            </div>
        </div>
    </div>
</body>
</html>