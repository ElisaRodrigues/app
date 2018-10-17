<?php
session_start();
require __DIR__.'/../../database/Conexao.php';

$conexao = Conexao::getConexao();

$email= $_POST['email'];
$senha= $_POST['senha'];
//$descript = md5($senha);

$wary = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'"; //$descript na senha
$users = $conexao->query($wary)->fetch(PDO::FETCH_ASSOC);


if ($users == false){
    $_SESSION['error_login'] = "Error - Usuario ou Senha Inválidos";
    header("Location: http://localhost/tcc/app/views/login.php");
}else{

    $sql = "SELECT * FROM administrador WHERE id_usuarios = {$users['idUsuarios']}";
    $admin = $conexao->query($sql)->fetch(PDO::FETCH_ASSOC);

    //se existir um admin
    if ($admin != false){
        $_SESSION['tipo_user'] = 'admin';
        $_SESSION['id_user'] = $admin['idAdministrador'];
        $_SESSION['nome'] = $admin['razao_social'];

    //se nao for admin, so pode ser vendedor
    } else {
        $sql  = "SELECT * FROM vendedor, usuarios WHERE idUsuarios = id_usuarios";
        $vendedor = $conexao->query($sql)->fetch(PDO::FETCH_ASSOC);

        $_SESSION['tipo_user'] = 'vendedor';
        $_SESSION['id_user'] = $vendedor['idVendedor'];
        $_SESSION['nome'] = $vendedor['nome'];
    }

    header("Location: http://localhost/tcc/app/controllers/produto_controller.php?acao=listar");
}