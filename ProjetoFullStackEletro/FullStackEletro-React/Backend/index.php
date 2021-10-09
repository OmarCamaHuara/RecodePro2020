<?php
    require "./Models/Produtos.php";

    header("Access-Control-Allow-Origin:*");
    header("Content-type: application/json");

    $produtos = Produtos::getAll();

    echo json_encode($produtos);

?>