<?php
    include ("ClassConexao.php");

    class ClassCarros extends ClassConexao
    {

        #Exibiação dos carros em um json
        public function exibeCarros()
        {
            $sql = $this->conectaDB()->prepare("SELECT * FROM carros");
            $sql->execute();
            
            $J = [];
            $I = 0;

            while($Fetch = $sql->fetch(PDO::FETCH_ASSOC)){
                $J[$I] = [
                    "id_carro"=>$Fetch["id_carro"],
                    "marca" =>$Fetch["marca"],
                    "modelo" =>$Fetch["modelo"],
                    "ano" => $Fetch["ano"]
                ];
                $I++;
            }

            header("Access-Control-Allow-Origin:*");
            header("Content-type: application/json");
            echo json_encode($J);
        }
    }

?>