<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
<!--Crie um formulário com os campos: Nome, Email, Botão "Cadastrar"
Ao enviar o formulário, os dados devem ser enviados por POST.
Os usuários cadastrados devem ser exibidos abaixo do formulário.-->

    <form action="" method="POST">
        <div class="mb-3">
            <label for="nome" id="nome">Nome: </label>
            <input type="text" id="nome" name="nome">
        </div>
        <div class="mb-3">
            <label for="email" id="email">E-mail: </label>
            <input type="text" id="email" name="email">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            echo "<div>Nome: $nome <br> Email: $email</div>";
        }
    ?>
</body>
</html>