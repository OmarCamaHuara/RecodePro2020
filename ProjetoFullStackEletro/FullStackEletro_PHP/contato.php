<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullsckteletro";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("A conexao ao DB falhou: ".mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> 
    <title>Contacto - Full Stack Electro</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body> 
    <!--Inicio do menu-->
    <?php
          include('menu.html');
    ?>
    <!--Fin de Menu-->
    
    
    <!--Inicio do Corpo--> 
    <header>
        <h2>Contato!</h2>
    </header>
    <hr>
    <section class="filiais">
        <div class="contacto">
            <img src="./img/gmail.png">
            contacto@fullstackeletro
        </div>
        <div class="contacto">
            <img src="./img/whatsapp.png">
            (11) 980808286
        </div>
    </section>

    
    <section class="formulario">
        <form class="box-formulario" method="post" action="">

            <h4>Nome:</h4>
            <input type="text" name="nome" style="width: 400px" >

            <h4>Mensagem:</h4>
            <textarea name="msg" id="" cols="30" rows="10" style="width:400px"></textarea>

            <input type="submit" name="submit" value="Enviar">
        </form>
    </section>
        <h2>Comentarios</h2>
        <section class="comen">

             <?php
                $sql = "select * from comentarios";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
                        echo "Data: ", $rows['data'], "<br>";
                        echo "Data: ", $rows['nome'], "<br>";
                        echo "Data: ", $rows['msg'], "<br>"; 
                        echo "<hr>";
                }
                }else{
                    echo "Nenhum comentario ainda!";
                }  
            ?> 
        </section>
    <!--Fin do Corpo--> 
    
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    
    <!--Inicio do Rodape-->
    <footer id="rodape">
        <p id="formasPagamento"><b>Formas de pagamento</b></p>
        <img src="./img/usapagos.png" alt="Formas de pagamento">
        <p>&copy Recode Pro</p>
    </footer>
    <!--Fin do Rodape-->
</body>
</html>