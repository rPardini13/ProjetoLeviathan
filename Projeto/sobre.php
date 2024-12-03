<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo_projeto.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passion+One:wght@400;700;900&display=swap" rel="stylesheet">
    <title>Leviathan - Lan House</title>
</head>

<body>
    <div class="banner">
        <?php
        include 'banner.php';
        ?>
    </div>

    <div style="display:flex">
        <img src="css/Alan.png" alt="" class="imgalan">
        <span class="maintxtlan">Sobre Nosso QG</span>
    </div>

    <div style="height:400px">
        <img src="css/Leviatan.png" class="logoLan">
        <span class="TlanTxt"><br><br>Um Lugar para você EVOLUIR</span>
        <span class="lanTxt"><br><br>Venha conhecer os nossos planos de corujão, das 22h às 6h da manhã. <br>
            Ou então venha conhecer a nossa Lan House reservando de 1 hora até 5 horas. <br>
            Com máquinas das mais medianas até as de última geração.</span>
    </div>
    <div class="setupLevCup2">
        <img src="css/setup.png" alt="" class="SetupImg">
        <img src="css/setup2.png" alt="" class="SetupImg2">
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
    <div class="elementor-divider"
        style="--divider-pattern-url: url(&quot;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='none' overflow='visible' height='100%' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='1' stroke-linecap='square' stroke-miterlimit='10'%3E%3Cpath d='M0,6c6,0,0.9,11.1,6.9,11.1S18,6,24,6'/%3E%3C/svg%3E&quot;);">
        <span class="elementor-divider-separator"> </span>
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