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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body> 
    <!--Inicio do menu-->
    <?php
          include('menu.html');
    ?>
    <!--Fin de Menu-->
    
    
    <!--Inicio do Corpo--> 

    <div class="container mt-5">
        <header>
        <h2 class="text-info">Contato!</h2>
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
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nome:</label>
                <input type="email" class="form-control"  name="nome" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensaje:</label>
                <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
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
    </div>
    
    <!--Fin do Corpo--> 
    
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    
    <!--Inicio do Rodape-->
    <?php
        include('footer.html');
    ?>
    <!--Fin do Rodape-->
</body>
</html>