<?php
    session_start();
    $id = $_GET['id'];

    if($id == $_SESSION['id']){
        $conn = mysqli_connect("localhost", "root", "", "sistema");

        $sql = "DELETE FROM usuarios WHERE id = $id";

        $result = $conn->query($sql);
        if($result){
            session_destroy();
            echo "
                <script>
                    alert('Cuenta excluida com sucesso!');
                    window.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('Nao foi posible excluir a conta');
                    window.location.href = 'perfil.php';
                </script>
            ";
        }
    }else{
        echo "
            <script>
                alert('Nao foi posible excluir a conta');
                location.href = 'home.php';
            </script>
        ";
    }





?>