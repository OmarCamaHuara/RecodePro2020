<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio AVA</title>
</head>
<body>

    <?php
        // Funções Recursivas
        function multiplicacao($x, $y){
            if($y == 0){
                return 0;
            }else{
                return $x + multiplicacao($x, --$y);
            }
        }
        echo "----------- EX 1 -------------<br>"; 
        echo "Multiplicacao entre 4 e 6 <br>";
        echo "Resultado: ". multiplicacao(4, 6). "<br>";


        // Factorial com recursividade

        function fact($num){
            if($num == 0){
                return 1;
            }else{
                return $num * fact($num-1);
            }
        }
        echo "----------- EX 2 -------------<br>";
        echo "El resultado de 5 Factorial es: ".fact(5)."<br>";
        echo "<br><br>";
        // Para saber mais e conhecer otras funcoes de recursividade: 
        //https://www.php.net/manual/pt_BR/functions.user-defined.php

        //JSON
        // JavaScript ObjectNation
        // json_encode

        echo "----------- EX 3 -------------<br>";
        $arr = array('a' => 1, 'b' => 2, 'c'=> 3, 'd' => 4, 'e' => 5);

        echo json_encode($arr);
        echo "<br><br>";
        //json_decode
        echo "----------- EX 3 -------------<br>";
        $json = '{"a":1, "b":2, "c":3, "d":4, "e":5}';
         var_dump(json_decode($json));
         echo "<br><br>";
         var_dump(json_decode($json, true));
         echo "<br><br>";

         //

         $texto = '{"a":1, "b":2, "c":100}';
         $json = json_decode($texto);
         echo $json->b;
         echo "<br><br>";
         echo "<br><br>";
         echo "<br><br>";

        echo "----------- EX 3 -------------<br>";
        $frutas = array(1 => "Banana", 2 => "Melancia", 3 => "Manga");
        $fruta = $frutas[1];
        $frutas[1] = $frutas[3];   
        $frutas[3] = $fruta;
        echo var_dump($frutas);

        // https://www.youtube.com/watch?v=E1JeXJj8ooU&feature=youtu.be
        // https://www.webdesignemfoco.com/cursos/react-js/integrando-react-js-php-e-mysql
        // https://pt.stackoverflow.com/questions/383220/react-js-php-ajuda
        // API
        // https://www.chartjs.org/
        // https://d3js.org/
        // https://adminlte.io/


        // JSON

        $dado1 = file_get_contents("https://gturnquist-quoters.cfapps.io/api/random"); 
        $dado2= file_get_contents("https://gturnquist-quoters.cfapps.io/api/random");

        $conv1 = json_decode($dado1);
        $conv2 = json_decode($dado2, true);

        echo "
            <h2>
                {$conv1->value->id}
            </h2>
        ";

        echo "
            <h2>
                {$conv1->value->quote}
            </h2>
        ";

        echo "
            <h3>
                {$conv2['value']['id']}
            </h3>
        ";

        echo "
            <h3>
                {$conv2['value']['quote']}
            </h3>
        ";


        // API CEP
        // https://viacep.com.br/ws/21715000/json/
        // Hacer cadastro con CEP HomeWork

        echo '----------------------';

        echo '<br><pre>';

        /**$cep = "02840090";
        $jsonCep = file_get_contents("https://viacep.com.br/ws/{$cep}/json/");
        $arrCep = json_decode($jsonCep);
        print_r($arrCep);
        echo '<br>';
        var_dump($arrCep);**/


        $cep = $_POST['cep'];
        $jsonCep = file_get_contents("https://viacep.com.br/ws/{$cep}/json/");
        $arrCep = json_decode($jsonCep);
        print_r($arrCep);

        echo json_encode($arrCep);

        

    ?>

        <form action="" method="POST">
            <p>CEP:</p>
            <input type="text" name="cep" >
            <input type="submit" value="Enviar"> 
        </form>
</body>
</html>