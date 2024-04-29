<?php

$local = "localhost";
$usuario = "henry";
$senha = "Hfra2006";
$bd = "aplication";

$mysqli = new mysqli($local, $usuario, $senha, $bd);

if ($mysqli->error) {

    die("Falha a conectar o banco de dados " . $mysqli->error);
    echo "conexão não estabelicido";
}
?>