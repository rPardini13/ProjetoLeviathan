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

    <div style="display:flex">
        <img src="css/gamers.jpg" class="cttImg">
        <h1 class="maintxtlan">Nossos Planos</>
    </div>

    <div class="setups">
        <h1 class="titulo">Nossos Setups</h1>
        <div class="especificacoes">
            <img src="css/especificacoes.png" class="especImg">
            <h1 class="especTitulo">Especificações:</h1>
            <span class="especTxt">i7 8700 <br> Vídeo RTX 2070 <br> SSD 240 GB <br> ASUS TUF B360M Plus Gaming <br>
                16
                Gb RAM Corsair 3.000Mhz</span>
        </div>
        <div class="monitorcadeira">
            <img src="css/monitor.png" class="mcImg">
            <h1 class="mcTitulo">Monitor e Cadeira:</h1>
            <span class="mcTxt">Monitor Benq ZOWIE XL2546 240Hz <br> Dyac Cadeiras Gamer DT3 Elise</span>
        </div>
        <div class="perifericos">
            <img src="css/perifericos.png" class="periImg">
            <h1 class="periTitulo">Periféricos:</h1>
            <span class="periTxt">Mouse Zowie ZA12 <br> HeadSet HyperX Cloud Alpha <br> Teclado Mecânico <br>
                MousePad
                HyperX Fury S Large</span>
        </div>
    </div>

    <div class="planos">
        <h1 class="titulo2">Planos</h1>
        <div class="plano">
            <div class="plano_leviatan">
                <img src="css/leviatan-ico.png" class="img_leviatan">
                <h1 class="planos_titulos">Plano Leviatan</h1>
                <p class="txt_planos">Reserve sua máquina por 2 horas. R$25,00</p>
            </div>
            <div class="plano_gold">
                <img src="css/ouro.png" class="img_gold">
                <h1 class="planos_gold">Plano Gold</h1>
                <p class="txt_planos">Reserve sua máquina por 4 horas. R$40,00.</p>
            </div>
            <div class="plano_diamond">
                <img src="css/diamante.png" class="img_diamond">
                <h1 class="planos_titulos">Plano Diamond</h1>
                <p class="txt_planos">Reserve sua máquina por 6 horas. R$55,00.</p>
            </div>
            <div class="corujao">
                <img src="css/coruja2.png" class="img_corujao">
                <h1 class="planos_corujao">Corujão</h1>
                <p class="txt_planos">Reserve sua máquina das 22h ás 6h. R$90,00.</p>
            </div>
        </div>
    </div>

    <div class="rodape">
        <?php
        include 'rodape.php';
        ?>
    </div>
</body>

</html>