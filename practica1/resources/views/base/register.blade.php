<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>register</h1>

    <form action="registerHome" method="post">
    @csrf
            <input type="text" name="correo" id="correo" placeholder="correo">
            <input type="submit" value="registrarse">
    </form>
</body>
</html>