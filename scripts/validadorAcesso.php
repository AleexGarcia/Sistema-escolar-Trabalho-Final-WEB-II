<?php 
    
    //verificando se usuario não foi autenticado e redirecionando para pagina de login

    if(!isset($_COOKIE['token']) || $_COOKIE['token'] != 'acessoPermitido') {

        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Login/Login.php?login=erro2');

    }
    
?>