<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tela de login</title>

</head>

<body>
    <!-- <a href="home.php">Voltar</a> -->
    <nav>
        <div class="div-voltar">
            <a href="home.php">Voltar</a>
        </div>
    </nav>
    <div class="div-tela-login">
        <h1>Login</h1>
        <form action="teste_login.php" method="POST">
            <input type="text" name="email" placeholder="e-mail" class="input-nome-tela-login">
            <br><br>
            <input type="password" name="senha" placeholder="Senha" class="input-nome-tela-login">
            <br><br>
            <input Class="input_submit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
    
</body>

</html>