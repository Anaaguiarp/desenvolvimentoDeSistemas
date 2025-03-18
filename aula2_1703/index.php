<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula2_1703</title>
</head>
<body>
    <p> 
<?php
    $nome = "Juliana";  // Texto com aspas (duplas ou simples)
    $idade = 37;    // Número sem aspas
    echo "Nome: ".$nome." Idade: ".$idade;
?>
    </p>
    <h2>
        <?php
            //gettype($nome) retorna o tipo da variável $nome
            echo "A variavél nome é do tipo: ".gettype($nome).". Idade é do tipo: ".gettype($idade);
        ?>
    </h2>
    <?php
        $array = array(1, 2, 3, array("olá", "tudo", "bem?"));
        //var_dump($vetor) retorna a estrutura da variável $vetor
        var_dump($array);
    ?>
    <a href="formulario.html" target="_blanck">Vá para o form com ação em PHP</a>
    
</body>
</html>