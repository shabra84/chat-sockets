<?php
$usuario = $_REQUEST['usuario'];

$estaUsuario = 0;

$mysqli = mysqli_connect("localhost", "root", "root", "sendme");
$resultado = mysqli_query($mysqli, "SELECT * FROM usuarios where usuario='$usuario'");

if($resultado->num_rows == 1)
    $estaUsuario = 1;

echo $estaUsuario;

