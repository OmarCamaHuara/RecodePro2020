<?php

require "Connection.php";

class Produtos
{   
    public $idproduct; 
    public $categoria;
    public $imagen;
    public $descricao;
    public $preco;
    public $precoFinal;
    

    public static function getAll()
    {
        $connection = Connection::getDB();

        $sql = $connection->query("SELECT * FROM produtos");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
}