<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<!--Sustituição de Texto-->
    <form action="" method="POST">
        <div>
            <div class="mb-3">
                <label for="texto" id="texto">Texto: </label>
                <input type="text" id="texto" name="texto">
            </div>
            <div class="mb-3">
                <label for="substituir">Sustituir: </label>
                <input type="text" id="substituir" name="substituir">
            </div>
            <div class="mb-3">
                <label for="por">Por: </label>
                <input type="text" id="por" name="por">
            </div>
            <button type="submit">Salvar</button>
        </div>
    </form>
    <?php
        
        if($_SERVER["REQUEST_METHOD"] == "POST"){ //verifica ser for enviado via POST
            $texto = $_POST["texto"]; //coloca o campo de nome "texto" na variável $texto
            $substituir = $_POST["substituir"];
            $por = $_POST["por"];

            function substituirTexto($texto, $substituir, $por){ 
                return str_replace($substituir, $por, $texto); //str_replace(caracteceAntigo, caractereNovo, texto);
            }

            $substituicao = substituirTexto($texto, $substituir, $por);
            echo "<div>Substituição: $substituicao</div>";
        }
    ?>
    
</body>
</html>