<?php
    session_start();

    if(!isset($_SESSION['nome'])){
        header('location:index.php');
        exit;
    }else{
        $conn = mysqli_connect("localhost", "root", "","sistema");

    $sql = "SELECT * 
            FROM postagens AS p 
                JOIN usuarios AS u 
            WHERE p.fk_usuario = u.id
            ORDER BY p.id_postagens DESC";

    $result = $conn->query($sql);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <!--
        sm = 576
        md = 768
        lg = 992
        xl = 1200
    -->

    <!-- Cabecalho -->
    <header class="container-fluid border shadow">
        <nav class="row container m-auto">
            <div class="col-10 d-flex align-items-center bg-white">

                <img class="rounded-circle" src="<?php echo $_SESSION['imagem']?>" alt="<?php echo $_SESSION['imagem']?>">
                <h5 class="ml-3 mb-0"><?php echo $_SESSION['nome'] ?></h5>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-end">

                <div class="dropdown">
                    <button class="btn text-white rounded-circle btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="perfil.php">Meu Perfil</a>
                        <a class="dropdown-item" href="sair.php">Sair</a>
                    </div>
                </div>
                

            </div>
        </nav>
    </header>

    <!-- Conteudo -->

    <main class="container">
        <form class="form-row mt-5" action="cadastro_postagens.php" method="post">
            <input class="col-9 form-control" name="post" type="text" placeholder="No que voce esta pensando, <?php echo $_SESSION['nome']?>?">
            <button class="col-3 btn" name="submit">Publicar</button>
        </form>

    <?php
        foreach($result as $postagem){
    ?>

        <div class="card mt-5">
            <div class="card-header">
                <img class="rounded-circle" src="<?php echo $postagem["imagem"]?>" alt="<?php echo $postagem["imagem"]?>">
                <h5 class="ml-3 mb-0"><?php echo $postagem["nome"] ?></h5>
            </div>
            <div class="card-body">
                <p><?php echo $postagem["conteudo"]?></p>
            </div>
        </div>

    <?php } ?>
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>