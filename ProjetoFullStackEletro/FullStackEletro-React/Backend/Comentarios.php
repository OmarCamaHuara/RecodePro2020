<?php
    require "./Models/contatos.php";

    $comentarios = new Comentarios;
    $comentarios->nome = $_POST['nome'];
    $comentarios->msg = $_POST['msg'];

    $validate = $comentarios->registComen();

    if($validate == true){
        echo json_encode(true);
    }else{
        echo json_encode(false);
    }
?>