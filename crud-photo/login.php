<?php

include("conexao.php");
if (isset($_POST["btnLogin"])) {

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    $sql_code = "SELECT * FROM tbalunos WHERE email = '$email' AND senha = '$senha'";

    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    $quantidade = $sql_query->num_rows;
    if ($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['id']     = $usuario['id'];
        $_SESSION['nome']   = $usuario['nome'];


        if ($usuario['nacess'] == 3) {
            header("Location: indexuserl3.php");
        }
        else if ($usuario['nacess'] == 1) {
            header("Location: indexadm.php");
        }
    } else {
        echo "Falha ao logar! E-mail ou senha incorretos";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/stylelogin.css" />
</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="login">
            <form name="login" action="" method="POST">
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="email@gmail.com" required="" />
                <input type="password" name="senha" placeholder="Digite sua senha" required="" />
                <button name="btnLogin">Login</button>
                <!-- <button name="inserir">Inscreva-se</button> -->
            </form>
        </div>

    </div>
</body>

</html>