<?php
    session_start();

    if(!isset($_SESSION['nome'])){
        header('location:index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">
    <title>Perfil</title>
</head>
<body>
    <header class="container-fluid border shadow">
        <nav class="row container m-auto">
            <div class="col-10 d-flex align-items-center bg-white">
                <img class="rounded-circle" src="<?php echo $_SESSION['imagem']?>" alt="<?php echo $_SESSION['imagem']?>">
                <h5 class="ml-3 mb-0"><?php echo $_SESSION['nome']?></h5>
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

    <main class="container">
        <section class="row pt-5">
            <div class="col-lg-4">
                <img class="rounded-circle" style="width:300px; height:300px;" src="<?php echo $_SESSION['imagem']?>" alt="<?php echo $_SESSION['imagem']?>">
            </div>
            <div class="col-lg-8">
                <h1><?php echo $_SESSION['nome']?></h1>
                <p><?php echo $_SESSION['email']?></p>
            </div>
        </section>
        <section class="mt-5 border p-5">
            <div class="alert alert-danger" role="alert">
                Cuidado!!! ao remover a conta, nao podera ser recuperada
            </div>
            <button class="btn btn-danger" onclick="confirmar()">Remover a conta</button>
        </section>

    </main>


    <script>
        function confirmar(){
            let confirmacao = confirm("Voce realmente deseja expluir a conta");

            if(confirmacao){
                // Cuando se quiere pasar un dato get
                location.href = "remover_conta.php?id=" + <?php echo $_SESSION['id']?>;
            }
        }
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>