<?php
    require "Connection.php";

    class Usuarios
    {
        public $idUsuarios;
        public $idProdutos;
        public $nome;
        public $sobrenome;
        public $cpf;
        public $cep;
        public $telefone;
        public $email;

        public static function getAll()
        {
            $conn = Connection :: getDB();

            $sql = "SELECT p.categoria, p.imagen, p.precoFinal, u.nome, u.sobrenome, u.email
                            FROM produtos as p
                            JOIN usuarios AS u
                             ON p.idproduct = u.idProdutos";
            
            $resp = $conn->query($sql);
            return $resp->fetchAll(PDO::FETCH_ASSOC);
        }

        public function registrarUsuario(){
            $conn = Connection::getDB();

            $sql = $conn->query("INSERT INTO usuarios (idProdutos, nome, sobrenome, cpf, cep, telefone, email)VALUES('$this->idProdutos','$this->nome', '$this->sobrenome', '$this->cpf', '$this->cep', '$this->telefone', '$this->email')");

        

            if($sql == true){
                return true;
            }else {
                return false;
            }
        }
    }
?>