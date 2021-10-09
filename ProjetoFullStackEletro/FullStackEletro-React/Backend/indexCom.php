<?php

    require "./Models/contatos.php";

    header("Access-Control-Allow-Origin:*");
    header("Content-type: application/json");

    $comentarios = Comentarios :: getAll();
    echo json_encode($comentarios)
?>