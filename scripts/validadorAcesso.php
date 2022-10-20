<?php 
    session_start();
    
    //verificando se usuario não foi autenticado e redirecionando para pagina de login

    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {

        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Login/Login.php?login=erro2');

    }
    

?>