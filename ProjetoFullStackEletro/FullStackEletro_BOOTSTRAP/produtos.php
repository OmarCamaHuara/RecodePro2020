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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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

    <div class="container mt-5">
    <header>
        <h2 class="text-info">Producto!</h2>
    </header>
    <hr class="shadow">
    <section class="container produtos ml-5">
        <div class="row justify-content-center pl-5 mf-5">
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
        </div>   
    </section>
    </div>
    
    <!--Fin do Corpo-->

    
    <!--Inicio do Rodape-->
    <?php
        include('footer.html');
    ?>
    <!--Fin do Rodape-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>