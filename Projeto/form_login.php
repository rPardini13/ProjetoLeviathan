<!DOCTYPE html>
<html>

<head>
    <title>
        Leviathan - Lan House
    </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo_projeto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="banner">
        <?php
        include 'banner.php';
        ?>
    </div>

    <div class="form_login">
        <h1 class="login_titulo">Login</h1>
        <form id="login" method="post" action="login.php">
            <label class="labelform_login">Digite seu Email:</label><br>
            <INPUT TYPE="TEXT" NAME="email" SIZE=60 MAXLENGTH=50 placeholder="Seu Email" class="txtform"><BR>
            <label class="labelform_login">Digite sua Senha:</label><br>
            <INPUT TYPE="password" NAME="senha" SIZE=60 MAXLENGTH=25 placeholder="Sua Senha" class="txtform"><BR>
            <input type="submit" class="btn" value="LOGAR">
            <BR><BR>
            <a href="home.php" class="link-cad"> ⬅ VOLTAR PARA A PÁGINA PRINCIPAL</a>
            <br><br>
            <a href="form_cadastro.php" class="link-cad">Não tem uma conta ainda? Clique aqui para se cadastrar!</a>
            <br><br>
        </form>
    </div>

    <div class="rodape">
        <?php
        include 'rodape.php';
        ?>
    </div>
</body>

</html>