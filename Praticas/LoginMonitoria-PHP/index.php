<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entre ou cadastre-se</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <main>
        <section class="login">
            <div class="card">
               <h1>Entre ou cadastre-se</h1>
                <form action="login_user.php" method="post">
                    <input type="email" name='email' placeholder="E-mail">
                    <input type="password" name='senha' placeholder="Senha">
                    <button type="submit">Entrar</button> 
                    <a href="./cadastro.php">Ainda no pessui cadastro? clique aqui</a>
                </form>
            </div>
        </section>
        <section class="imgen">
            <img src="./img/login.svg" alt="login">
        </section>
    </main>
</body>
</html>