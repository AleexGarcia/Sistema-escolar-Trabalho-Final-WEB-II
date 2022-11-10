<?php 

    $expiracao = time() - 86400 * 5;
    setcookie('token','',$expiracao,'/');
    setcookie("nome",'', $expiracao ,'/');
    setcookie("acesso",'', $expiracao ,'/');
    setcookie("id",'', $expiracao ,'/');
    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=login');
    exit;
?>