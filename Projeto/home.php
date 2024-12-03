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

    <div class="ImagemPrincipal">
        <img src="css/lanhouse.png" alt="" class="MainImg">
        <span class="MainTxt">A Melhor Lan House de São Paulo.</span>
        <span class="MainSubTxt">Venha bater aquela gameplay avançada <br> com o melhor setup e espaço para sua
            diversão.</span>
        <a class="button" href="servicos.php">Reserve Já</a>
    </div>

    <div class="Servicos">
        <img src="css/lan2.png" alt="" class="ImgLan">
        <span class="TServTxt">Conheça nossos serviços</span>
        <span class="ServTxt">Venha conhecer os nossos planos de corujão, das 22h às 6h da manhã. <br><br>
            Ou então venha conhecer a nossa Lan House reservando de 1 hora até 9 horas. <br><br>
            Com nossas máquinas de última geração.</span>
    </div>

    <div class="setups">
        <span class="titulo">Nossos Setups</span>
        <div class="especificacoes">
            <img src="css/especificacoes.png" class="especImg">
            <span class="especTitulo">Especificações:</span>
            <span class="especTxt">i7 8700 <br> Vídeo RTX 2070 <br> SSD 240 GB <br> ASUS TUF B360M Plus Gaming <br> 16
                Gb RAM Corsair 3.000Mhz</span>
        </div>
        <div class="monitorcadeira">
            <img src="css/monitor.png" class="mcImg">
            <span class="mcTitulo">Monitor e Cadeira:</span>
            <span class="mcTxt">Monitor Benq ZOWIE XL2546 240Hz <br> Dyac Cadeiras Gamer DT3 Elise</span>
        </div>
        <div class="perifericos">
            <img src="css/perifericos.png" class="periImg">
            <span class="periTitulo">Periféricos:</span>
            <span class="periTxt">Mouse Zowie ZA12 <br> HeadSet HyperX Cloud Alpha <br> Teclado Mecânico <br> MousePad
                HyperX Fury S Large</span>
        </div>
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