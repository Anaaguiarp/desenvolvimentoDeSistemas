<?php
    require_once 'Fabricante.php';

    $fabricante = new Fabricante;
    $fabricante -> setNome("Sony");
    $fabricante -> setEndereco("Rua Qualquer, 159");
    $fabricante -> setDocumento("2313584879685646");
    echo ($fabricante -> __toString());

    require_once 'Produto.php';
    $produto = new Produto("Mouse Óptico", 99.9, 2);
    $produto -> setFabricante($fabricante);
    echo("<p>{$produto}</p>");
?>