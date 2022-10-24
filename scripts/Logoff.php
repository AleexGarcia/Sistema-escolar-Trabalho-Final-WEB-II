<?php 

    $expiracao = time() - 86400 * 5;
    setcookie('token','',$expiracao,'/');
    setcookie("acesso",'', $expiracao ,'/');
    setcookie("id",'', $expiracao ,'/');
    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Login/Login.php');

?>