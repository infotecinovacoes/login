<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Login</title>
</head>

<body>
    <div id="corpo-form">
        <h1>Entrar</h1>

        <form action="processa.php" method="post">

            <input type="email" name="email" placeholder="Usuário" maxlength="40">
            <input type="password" name="senha" placeholder="Senha" maxlength="15">
            <input type="submit" value="ACESSAR">
            <a href="cadastrar.php">Ainda não é inscrito?<strong> Cadastre-se!</strong></a>

        </form>
    </div>

    <?php

    ?>
</body>

</html>