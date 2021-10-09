<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/cadastro.css">
</head>
<body>
    <main>
        <div class="card">
            <h1>Cadastre-se</h1>
            <form action="cadastro_usuario.php" method='post'>
                <input type="text" name='nome' placeholder= "Digite o seu nome"/>
                <input type="url" name='imagem' placeholder= "imagem"/> <!-- ?nome = Guillerme-->
                <input type="email" name='email' placeholder="Digite o seu email">
                <input type="password" name='senha' placeholder="Digite a sua senha">
                <input type="password" name='conf_senha' placeholder="confirme sua senha">
                <button type="submit">Cadastre-se</button> 
            </form>
            <a href="./index.php">Ja possui cadastro? Reazlie o login</a>
        </div>
    </main>
</body>
</html>