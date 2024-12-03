                                            <!--    Arquivo de conexão  -->
<?php header("Content-type: text/html;charset=utf-8");

    $host="localhost";
    $user="root";
    $pass= "";
    $db = "romulo";

    $link = mysqli_connect($host, $user, $pass, $db);
    $banco = mysqli_connect_errno();

    if ($banco == true) {
        echo "Erro na conexão";
    } else {
        echo "conexão ok!<br>";
    }
?>