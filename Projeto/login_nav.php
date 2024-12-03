<?php
session_start();

if($_SESSION['nome'] != ''){
    echo "<div style='color:white;font-size: 20px;text-transform: uppercase;
    '>Seja Bem Vindo, ".$_SESSION['nome']."</div>";
    echo '<a href="acao_logoff.php" class="login"> LOGOFF </a>';
    echo '<a href="cadastros.php" class="login"> USUÁRIOS </a>';
}
?>

<a href="FORM_login.php" class="login">LOGAR</a>
<a href="cadastro_form.php" class="login">CADASTRE-SE</a>