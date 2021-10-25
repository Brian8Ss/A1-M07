<?php
session_start();

if (!array_key_exists("username", $_SESSION)) {
header("location:index.php");
}


?>

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
<a href="index.php"><h4 class="profe">Logout/Home</h4></a>
<div class="perfil">
<h1>Perfil</h1>
<span>Bienvenido <?php echo $_SESSION["username"]; ?></span>
</div>
</body>
</html>