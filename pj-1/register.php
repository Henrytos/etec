<?php

include './assets/database/conexao.php';

if (isset($_POST["cadastrar"])) {

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $matricula = $_POST["matricula"];
    $curso = $_POST["curso"];
    $senha = $_POST["senha"];
    $serie = $_POST["serie"];
    $nacess = $_POST["nacess"];
    $email = $_POST["email"];


    //Salvando a imagem
    $extensao = strtolower(substr($_FILES['imagem']['name'], -4));//pega os 4 ultimos caracteres de uma string
    $novo_nome = md5(time()) . $extensao;//define o nome do arquivo criptografado
    $diretorio = "./assets/uploads/";//define o diretório


    $inserir = "INSERT INTO tbalunos (nome, idade, matricula, curso, senha, foto, serie, nacess, email)
     VALUES ('$nome', '$idade','$matricula','$curso', '$senha','$novo_nome', '$serie','$nacess', '$email')";

    $is_register = mysqli_query($mysqli, "SELECT * FROM tbalunos WHERE email = '$email'");
    if ($is_register->num_rows) {
    } else {
        $query = mysqli_query($mysqli, $inserir);
        move_uploaded_file($_FILES["imagem"]["tmp_name"], $diretorio . $novo_nome);

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
        <table class="table">

            <form name="Cadastrar" action="" method="POST" enctype="multipart/form-data">

                <td></td>
                <tr>
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nome">

                </tr>
                <tr>
                    <label for="exampleFormControlInput1" class="form-label">Idade</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="idade">
                </tr>

                <tr>
                    <label for="exampleFormControlInput1" class="form-label">Matricula</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="matricula">
                </tr>



                <label for="exampleFormControlInput1" class="form-label">Curso</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="curso">

                <tr>
                    <label for="exampleFormControlInput1" class="form-label">Senha</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="senha">
                </tr>
                <tr>
                    <label for="exampleFormControlInput1" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" name="imagem"
                        accept="image/*">

                <tr>


                <tr>
                    <label for="exampleFormControlInput1" class="form-label">Série</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="serie">
                </tr>

                <tr>
                    <label for="exampleFormControlInput1" class="form-label">Nivel de Acesso</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="nacess">

                </tr>
                <tr>
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
                </tr>


                <td><button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button></td>
                </tr>

            </form>
            </tr>
            </thead>
            <tbody>


                <!-- JavaScript -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
                    crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
                    crossorigin="anonymous"></script>
</body>

</html>