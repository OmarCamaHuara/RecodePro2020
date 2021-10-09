<?php
session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']);

if(strlen($email) > 3 && strlen($senha)>3){ 

    $conn = mysqli_connect("localhost", "root", "", "sistema");

    // Execução da instrução SQL
    $resultado_consulta = $conn->query("SELECT * from usuarios where email = '$email' AND senha = '$senha'");

    // $usuarios recebe a lista de usuários
    $usuarios = mysqli_fetch_assoc($resultado_consulta);

    $_SESSION['nome'] = $usuarios["nome"];
    $_SESSION['imagem'] = $usuarios["imagem"];
    $_SESSION['email'] = $usuarios["email"];
    $_SESSION['id'] = $usuarios["id"];
    //echo '<pre>';
    //print_r($usuarios);
    //echo '</pre>';

    header('location:home.php');

}else{
    echo"
        <script>
            alert('Email ou senha invalida!!')
            location.href = 'index.php'
        </script>
    ";
}

#echo "
#<script>
#   location.href = 'cadastro.php'
#</script>
#";