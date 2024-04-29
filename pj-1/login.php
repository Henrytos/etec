<?php
session_start();
include './assets/database/conexao.php';

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $query = "SELECT * FROM tbAlunos WHERE email = '$email' AND senha = '$senha'";
    $data = mysqli_query($mysqli, $query);
    $user = $data->fetch_assoc();

    if ($user) {
        $_SESSION['usuario'] = $user;
        header('Location: ./index.php');
    } else {
        echo "Usuário ou senha inválidos";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center">Cadastro de Clientes</h1>

    <br />
    <div class="container">

        <form name="login" action="" method="POST" enctype="multipart/form-data">
            <div>
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="email" required>

            </div>
            <div>
                <label for="exampleFormControlInput1" class="form-label">Senha</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="senha" required>
            </div>
            <div>
                <button type="submit" class="btn btn-primary block w-full" name="login">Cadastrar</button>
            </div>
        </form>

        <!-- JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
            </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
            </script>
</body>

</html>