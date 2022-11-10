<?php 
    
    //verificando se usuario não foi autenticado e redirecionando para pagina de login

    if(!isset($_COOKIE['token']) && !isset($_COOKIE['id']) && !isset($_COOKIE['nome'])) {
        
        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Login/Login.php?login=erro2');

    }
    
?>