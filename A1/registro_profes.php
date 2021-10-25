<?php
session_start();
ini_set('display_errors', '1');

$usuario = filter_input(INPUT_POST, "usuario");
$password = filter_input(INPUT_POST, "password");

$con = new mysqli("127.0.0.1", "root", "root", "school");

if ($con->connect_errno) {

    printf("connection failed: %s\n", $con->connect_error());
    exit();
}

$res = $con->query("insert into professors(nombre, password) values ('$usuario', '$password') ");

$con->close();

$_SESSION["username"] = $usuario;

header("location:perfil.php");