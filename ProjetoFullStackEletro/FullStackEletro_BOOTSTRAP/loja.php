<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nossas Lojas - Full Stack Electro</title>
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
        <h2 class="text-info">Nossas Lojas!</h2>
    </header>
    <hr>
    <section class="container filiais">
        <div class="filiais-box">
            <h3>Rio de Janeiro</h3>
                <p>Avenida Presidente Varga, 5000</p>
                <p>10 &ordm : andar</p>
                <p>Centro</p>
                <p>(21) 3333-3333</p>
        </div>
        <div class="filiais-box">
            <h3>Sao Paulo</h3>
                <p>Avenida Paulista, 6000</p>
                <p>10 &ordm : andar</p>
                <p>Centro</p>
                <p>(21) 4444-4443</p>
        </div>
        <div class="filiais-box">
            <h3>Santa Catalina</h3>
                <p>Avenida Presidente Varga, 5000</p>
                <p>10 &ordm : andar</p>
                <p>Centro</p>
                <p>(21) 3333-3333</p>
        </div>
    </section>
    </div>
    
    <!--Fin do Corpo-->

    <br><br><br><br><br>
    <br><br><br><br><br>
    
    <!--Inicio do Rodape-->
    <?php
        include('footer.html');
    ?>
    <!--Fin do Rodape-->
</body>
</html>