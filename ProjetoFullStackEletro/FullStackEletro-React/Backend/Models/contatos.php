<?php
     
     require "Connection.php";

     class Comentarios
     {
         public $comentarios_id;
         public $nome;
         public $msg;

         public static function getAll()
         {
             $conn = Connection :: getDB();

             $sql = "SELECT * FROM comentarios";
             
             $resp = $conn->query($sql);
             return $resp->fetchAll(PDO::FETCH_ASSOC);
         }

         public function registComen(){
             $conn = Connection :: getDB();

             $sql = $conn->query("INSERT INTO comentarios (nome, msg) VALUES ('$this->nome', '$this->msg')");

             if($sql->rowCount() > 0){
                return true;
             }else{
                return false;
             }
         }
     }
?>