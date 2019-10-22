<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>login</h1>
    @isset($mensaje)
    <h2>{{ $mensaje ?? ''}}</h2>
    @endisset


    <form action="loginUser" method="post">
    @csrf
            <input type="text" name="correo" id="correo" placeholder="correo">
            <input type="password" name="clave" id="clave" placeholder="contraseña">
            <input type="submit" value="login">
        </form>
        <h2><a href="{{ url('register') }}">¿has olvidado tu contraseña?</a></h2>
</body>
</html>


