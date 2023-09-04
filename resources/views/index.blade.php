<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Locadora BRITVIC</title>
</head>
<nav class="navbar">
    <div class="logo">
        <h1>BITVIC</h1>
    </div>

    <div class="menu-top">
        @if(!auth()->check())
        <a href="{{route('login')}}">Login</a>
        @else
        <a href="{{route('login')}}">Dashboard</a>
        @endif
        <a href="{{route('alugar.veiculo')}}">Alugar um carro</a>
    </div>   
</nav>

<section>
    <h5>SECTION</h5>
</section>

<footer>

   <div class="footer">
    <h1 id="mylogo">Britvic</h1>
    <ul>
        <li><a href="#">Veiculos</a></li>
        <li><a href="#">Portfólio</a></li>
        <li><a href="#">Contato</a></li>
       
    </ul>
   </div>

   <div class="footer">
    <h1>Social</h1>
    
   </div>
</footer>
<div class="direitos">
   <b>Copywriting © Bitvic 2023 todos os direitos reservados.</b>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>