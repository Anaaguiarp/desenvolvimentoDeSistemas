<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<!--Crie um formulário com os campos: Usuário, Senha, Botão "Entrar"
Quando o formulário for enviado:
Se os dados estiverem corretos (usuário = admin, senha = 1234), exiba uma mensagem de boas-vindas.
Caso contrário, exiba "Usuário ou senha inválidos".
Use POST para envio dos dados.-->

    <form action="" method="POST">
        <div class="mb-3">
            <label for="nome" id="nome">Nome: </label>
            <input type="text" id="nome" name="nome">
        </div>
        <div class="mb-3">
            <label for="senha" id="senha">Senha: </label>
            <input type="password" id="senha" name="senha">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
    <?php
        $nome = "admin";
        $senha = "1234";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nomeInserido = $_POST["nome"];
            $senhaInserida = $_POST["senha"];

            if($nomeInserido == $nome && $senhaInserida == $senha){
                echo "<div>Seja bem-vindo! {$nome}</div>";
            }else{
                echo "Usuário ou senha inválidos";
            }
        }
    ?>
</body>
</html>