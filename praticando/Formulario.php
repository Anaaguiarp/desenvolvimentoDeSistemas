<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Idade</title>
</head>
<body>
<!-- 1- Criar um formulário HTML que possui um elemento select para escolher um
valor que representa a idade de uma pessoa entre 18 e 50 anos. Criar o select
dinamicamente com PHP.
    2 - Implementar o envio do formulário via POST para o mesmo script PHP com a
inclusão de um elemento <h1> com a frase “Você tem XX anos”, substituindo
o XX pelo valor escolhido pelo usuário.-->
<div>
    <form action="Formulario.php" method="POST">
        <label for="idade">Idade:</label>
        <select name="idade" id="idade">
        <?php
            for ($idade = 18; $idade <= 50; $idade++) {
                echo "<option value=\"$idade\">$idade</option>";
            }
        ?>
        </select>
        <div>
            <br>
            <button type="submit">Salvar</button>
        </div>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $idadeSelecionada = $_POST["idade"];
            echo "<h1>Você tem {$idadeSelecionada} anos</h1>";
        }
    ?>
</div>
</body>
</html>