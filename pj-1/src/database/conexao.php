<?php 

$local      =      "localhost:3312";
$usuario    =      "root";
$senha      =      "usbw";
$bd         =      "ETECPJ";

$mysqli = new mysqli($local, $usuario, $senha, $db);

if($mysqli->erro){
 
 die("Falha a conectar o banco de dados ".$mysqli->error);
 echo "conexão não estabelicido";
}
?>