<?php 
    
    //verificando se usuario não foi autenticado e redirecionando para pagina de login

    if(!isset($_COOKIE['token']) && !isset($_COOKIE['id']) && !isset($_COOKIE['nome'])) {
        
        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=login&login=erro2');
        exit;
    }
    
?>