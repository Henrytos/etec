<?php
include("conexao.php");

$buscaCadastro      =       "SELECT * FROM tbalunos";
$queryCadastro      =       mysqli_query($mysqli, $buscaCadastro);


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area do Aluno</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/styleindexuserl3.css" />
</head>

<body>
    <!-- Inicio NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #24243e">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./assets/images/logo.jpg" width="80" heigth="80"
                    class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a style="color:#ffffff" class="nav-link disabled" href="#" tabindex="-1"
                            aria-disabled="true">Home</a>
                    </li>
                    <li class="nav-item">
                        <a style="color:#ffffff" class="nav-link disabled" href="#" tabindex="-1"
                            aria-disabled="true">Cadastrar</a>
                    </li>

                    <li class="nav-item">
                        <a style="color:#ffffff" class="nav-link disabled" href="#" tabindex="-1"
                            aria-disabled="true">Listar</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <img src="<?php $foto ?>" />
                </form>
            </div>
        </div>
    </nav>
    <br /><br />
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

        <title>Cadastro de Alunos</title>
    </head>

    <body>

        <h1 class="text-center">Cadastro de Alunos</h1>

        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
          while ($RCadastro = mysqli_fetch_array($queryCadastro)) {
            $id            =         $RCadastro['id'];
            $nome          =         $RCadastro['nome'];
            $email         =         $RCadastro['email'];
            $celular       =         $RCadastro['celular'];
            $foto          =         $RCadastro['foto'];
          ?>
                    <tr>
                        <td scope="row"><?php echo $id; ?></td>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $celular; ?></td>
                        <td><?php echo $celular ?></td>
                        <td><?php echo $foto ?></td>

                    </tr>

                    <?php }; ?>

                </tbody>
            </table>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js">
        </script>

    </body>

    </html>



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