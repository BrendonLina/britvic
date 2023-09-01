<h4>DASHBOARD</h4>
@if(session()->has('success'))
    {{session()->get('success')}}
@endif

@if(auth()->check())
    <p>Logado</p>
@endif

<a href="{{route('cadastrar.veiculo')}}">Cadastrar veiculo</a>
<a href="{{route('listar.veiculos')}}">Veiculo</a>
<a href="{{route('listar.usuarios')}}">Usuarios Cadastrados</a>
<a href="{{route('cadastrar.usuario')}}">Cadastrar usuario</a>

<a href="{{route('logout')}}">Sair</a>