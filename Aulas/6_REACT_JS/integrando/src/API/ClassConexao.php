<?php
    abstract class ClassConexao{
        #conexão com o banco de dados
        protected function conectaDB()
        {
            try{
                $Con = new PDO("mysql: host=localhost; dbname=carro", "root", "");
            }catch(PDOException $Erro){
                return $Erro->getMessage();
            }
        }
    }

?>