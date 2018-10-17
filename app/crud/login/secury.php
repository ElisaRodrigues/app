<?php
ob_start();//irá pegar tds os dados de saída e guardar em buffer. Os dados só serão enviados ao navegador no momento em que vc encerrar o buffer.

if (($_SESSION['id_user'] == "") || ($_SESSION['nome'] == "")){
    $_SESSION['secury'] = "Erro! É necessário que você faça login!";
    header('Location login.php');
}
