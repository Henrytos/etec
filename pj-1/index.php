<?php
include "./assets/database/conexao.php";
session_start();
$user = $_SESSION['usuario'] ? $_SESSION['usuario'] : [];

if (!$user) {
    header('Location: ./login.php');
}


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="./assets/styles/index.css" />

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-bar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">

                <img src="./assets/public/imgs/logotipo.png" alt="logo" id="Logotipo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cadastrar">cadastrar</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#listar">listar</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-success" type="submit" id="btn-seacrh">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <section class="container">
        <h3>bem vindo <?php
        echo $user['nome'];
        ?></h3>
    </section>



</body>

</html>