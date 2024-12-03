<!DOCTYPE html>
<html>

<head>
    <title>
        Leviathan - Lan House
    </title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo_projeto.css">
</head>

<body>
    <div class="banner">
        <?php
        include 'banner.php';
        ?>
    </div>
    <div clas="bannerctt">
        <img class="cttImg" src="css/contate-nos.jfif">
        <span class="cttTxt">Contate-nos</span>
    </div>

    <div class="conhecer">
        <span class="SubTituloC">Vamos nos conhecer <br></span>
        <span class="TituloC">Nos envie o seu feedback! <br></span>
        <span class="TextoC">Utilize esse canal para fazer contato conosco, atendemos mais ativamente via Instagram.
            <br></span>

        <img src="css/telefone.png" class="tel2">
        <span class="loctel2">(11) 94377-5992<br><br></span>
        <img src="css/email.png" class="email2">
        <span class="locctt2" onclick="location.href='mailto:leviathanlangaming@email.com';"
            style="cursor: pointer; color: blue; text-decoration: underline;">leviathanlangaming@gmail.com<br><br></span>
        <img src="css/point.png" class="endereco2">
        <span class="locEnd2">Av. Angélica, 903 - Santa Cecilia, São Paulo - SP, 01227-000</span>
    </div>

    <div class="formCtt">
        <form action="post" action="contatoacao.php">
            <label class="labelform">Digite seu nome:</label><br><INPUT TYPE="TEXT" NAME="nome" SIZE=60
                placeholder="Seu Nome" class="txtform"><BR>
            <label class="labelform">Digite seu Email:</label><br><INPUT TYPE="TEXT" NAME="email" SIZE=60 MAXLENGTH=25
                placeholder="Seu Email" class="txtform"> <BR>
            <label class="labelform">Digite seu Telefone:</label><br><input type="text" name="tel" size="60"
                maxlength="11" placeholder="Seu Número" class="txtform"><br>
            <label class="labelform">Mensagem:</label><br></Mensagem:br><TEXTAREA NAME="COMENTARIOS" ROWS=5 COLS=30
                placeholder="Qual a sua mensagem para nós?" class="txtform"></TEXTAREA>
            <button class="btnform">Enviar</button>
        </form>
    </div>

    <div class="localizacao">
        <?php
        include 'localizacao.php';
        ?>
    </div>

    <div class="rodape">
        <?php
        include 'rodape.php';
        ?>
    </div>
</body>

</html>