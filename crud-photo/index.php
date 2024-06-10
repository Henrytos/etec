<?php
include("conexao.php");
if (isset($_POST["cadastrar"])) {
    header("location:cadastrar.php");

} else if(isset($_POST["login"])){
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login 3D</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/stylelogin.css" />
</head>

<body>
    <div class="main">

        <div class="login">
            <form name="acesso" action="" Method="POST">
                <h1 class="cab01">Acesso ao Sistema</h1>

                <label>Para Cadastrar-se:</label>
                <button name="cadastrar">Inscreva-se</button>

                <label>Login</label>
                <button name="login">Acessar</button>
            </form>
        </div>

    </div>

</body>

</html>