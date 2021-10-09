<?php

    session_start();

    $postagem = $_POST['post'];
    $id = $_SESSION['id'];

    if(strlen($postagem) > 0){
        $conn = mysqli_connect("localhost", "root", "", "sistema");

        $sql = "INSERT INTO postagens (conteudo, fk_usuario) VALUES ('$postagem', $id)";

        $result = $conn->query($sql);

        if($result){
            echo "
                <script>
                    alert('Postagem cadastrado com sucesso!!');
                    location.href = 'home.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Nao foi posible cadastrar a postagem!!');
                    location.href = 'home.php'
                </script>
            ";
        }

    }else{  
        echo "
            <script>
                alert('Digite algo para postar!!');
                location.href = 'home.php';
            </script>
        ";
    }


?>