<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--3 - Criar um formulário HTML que possui um elemento select para escolher um
    valor que representa um estado brasileiro entre “Amazonas”, “Ceará”, “Goiás”,
    “Minas Gerais” e “Santa Catarina”.
    • Utilize um array associativo com os as respectivas siglas dos estados como
    chave e o nome por extenso como valor de cada campo.
    • Utilize um foreach para criar o select dinamicamente.-->

    <form action="Formulario.php" method="POST">
        <label for="estadoBrasileiro">Estado Brasileiro: </label>
        <select name="estadoBrasileiro" id="estadoBrasileiro">
            <?php
            $estadosBrasileiros = [
                "AM" => "Amazonas",
                "CE" => "Ceará",
                "GO" => "Goiás",
                "MG" => "Minas Gerais",
                "SC" => "Santa Catarina"
            ];

            foreach($estadosBrasileiros as $sigla=> $nome){
                echo "<option value=\"$sigla\">$nome</option>";
            }
            ?>
            
        </select>
        <br><br>
        <button type="submit">Salvar</button>
    </form>

</body>
</html>