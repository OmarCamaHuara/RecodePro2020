<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullsckteletro";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("A conexao ao DB falhou: ".mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<link>
    <meta charset="UTF-8">
    <title>Productos - Full Stack Electro</title>
    <link rel="stylesheet" href="./css/style.css"></link>
    <script src="./js/junciones.js"></script>
</head>
<body>
    <!--Inicio do menu-->
    <?php
        include('menu.html');
    ?>
    <!--Fin de Menu-->


    <!--inicio do Corpo-->
    <header>
        <h2>Producto!</h2>
    </header>
    <hr>
    <section class="categorias">
        <h3>Categorias</h3>
            <ul>
                <li onclick="exibirTodo()">Todos [12]</li>
                <li onclick="exibirCategoria('geladeira')">Geladerias [3]</li>
                <li onclick="exibirCategoria('fogao')">Fogões [2]</li>
                <li onclick="exibirCategoria('microondas')">Microondas [3]</li>
                <li onclick="exibirCategoria('lavaRoupa')">Labadouras de ropas [2]</li>
                <li onclick="exibirCategoria('lavaLouca')">Lava-louças [2]</li>
            </ul>
    </section>
    <section class="produtos">

            <?php
                $sql = "select * from produtos";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
            ?>
                    <div class="box_produto" id="<?php echo $rows["categoria"];?>" style="display: block;">
                        <img src="<?php echo $rows["imagen"];?>" alt="Geladeira" width='128px' onclick="destaque(this)">
                        <br>
                        <?php echo $rows["descripcao"];?>
                        <hr>
                        <strike>R$ <?php echo $rows["preco"];?></strike>
                        <br>
                        <p class="preco">R$<?php echo $rows["precoFinal"];?></p>  
                    </div>
            <?php
                }
                }else{
                    echo "Nenhum produto cadastrado!";
                }  
            ?>  

                
            <div class="box_produto" id="geladeira" style="display: block;">
            <img src="./img/Geladera1.png" alt="Geladeira" width='128px' onclick="destaque(this)">
                <br>
                Geladeira Frost Free Brastemp Side Inverse  540Litros
                <hr>
                <strike>R$ 6.389,00</strike>
                <br>
                <p class="preco">R$5.019,00</p>  
        </div>
    </section>
    <!--Fin do Corpo-->

    
    <!--Inicio do Rodape-->
    <footer id="rodape">
        <p id="formasPagamento"><b>Formas de pagamento</b></p>
        <img src="./img/usapagos.png" alt="Formas de pagamento">
        <p>&copy Recode Pro</p>
    </footer>
    <!--Fin do Rodape-->
</body>
</html>