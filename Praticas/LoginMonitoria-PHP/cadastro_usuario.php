<?php


    //echo "<pre>";
    //print_r($_POST);
    //echo '<pre>'

    //0,2,3
    // $arr = [omar, cama, 27]
    // $arr = ["nome" => 'Omar', "Sobrenome" => "Cama", ..... ]

    /*
        2 - Validação dos dados
        3 - Cadastro em banco de dados
        4 - Desafio de tratamiento de email
    */
    
    $nome = $_POST['nome'];
    $imagem = $_POST['imagem'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];
    
    
    if (strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && $senha == $conf_senha) {

        $senha_cripto = md5($senha);

        $conn = mysqli_connect("localhost", "root", "", "sistema");
    
        $sql = "INSERT INTO usuarios (nome, imagem, email, senha) values ('$nome', '$imagem', '$email', '$senha_cripto')";
    
        $conn->query($sql);

        echo "
            <script>
                alert('Cadastro efectuado')
                window.location.hrf = 'index.php'
            </script>
        ";
    }
    else if ($senha != $conf_senha) {
        echo "
            <script>
                alert('As senhas deben ser iguais, tente novamente')
                window.location.hrf = 'cadastro.php'
            </script>
        ";
    }
    else if (strlen($nome) <= 3) {
        echo "
            <script>
                alert('Digite um nome válido para realizar o cadastro')
                window.location.hrf = 'cadastro.php'
            </script>
        ";
    }
    else if (strlen($email) <= 3) {
        echo "
            <script>
                alert('Digite um e-mail válido para realziar o cadastro.')
                window.location.hrf = 'cadastro.php'
            </script>
        ";
    }
    else if (strlen($senha) <= 3) {
        echo "
            <script>
                alert('Digite uma senha válida para realizar o cadastro')
                window.location.hrf = 'cadastro.php'
            </script>
        ";
    }
    