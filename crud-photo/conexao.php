<?php
$usuario        =       "root";
$senha          =       "usbw";
$database       =       "etecpj";
$host           =       "localhost:3312";

$mysqli  =  new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
    die("Falha ao conectar ao banco de dados". $mysqli->error);
}
$create_table_students = "CREATE TABLE IF NOT EXISTS tbAlunos(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(255)NOT NULL,
    idade INT NOT NULL,
    matricula INT  NOT NULL,
    curso VARCHAR(50) NOT NULL,
    senha VARCHAR(50) NOT NULL,
    foto VARCHAR(255) NOT NULL,
    serie VARCHAR(255) NOT NULL,
    nacess VARCHAR(255) NOT NULL,
    email VARCHAR(255)NOT NULL
);
describe tbAlunos;
 
INSERT INTO tbalunos (nome, idade, matricula, curso, senha, foto, serie, nacess, email) VALUES ('henry', '17','12648','desenvolvimento sistemas', 'e10adc3949ba59abbe56e057f20f883e','ad306330522346d5561a52bf40863be6', '1','3', 'franzhenry@gmail.com');
 
 
SELECT * FROM tbAlunos;";
$mysqli->query($create_table_students);
?>