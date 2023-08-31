<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{route('dashboard')}}" method="post">
        @csrf
        <input type="email" placeholder="Email" id="email" name="email">
        <input type="password" placeholder="Senha" id="password" name="password">
        <input type="submit" name="Entrar">
    </form>
</body>
</html>