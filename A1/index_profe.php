<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<a href="index.php"><h4 class="profe">Alumnes</h4></a>
<div class="global-box">
    <div class="link">
        <h2>Home</h2>
        
    </div>
    <div class="register-box">
    <div class="register-box-1">
        <div class="title-text">Registrate!</div>
        <hr>
            <form action="registro_profes.php" method="POST" class="register">
                <span>Nombre:</span><input type="text" name="usuario">
                <span>Contraseña:</span><input type="password" name="password">
                <button type="submit">Registrarse</button>
            </form>
        <div class="title-text">Inicia Sesión</div>
        <hr>
        <form action="login_profe.php" method="POST" class="register">
                <span>Nombre:</span><input type="text" name="usuario">
                <span>Contraseña:</span><input type="password" name="password">
                <button type="submit">Iniciar sesión</button>
            </form>
    </div>
    </div>
</div>
</body>
</html>