<?php 
    
    session_start();
    session_destroy();
    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Login/Login.php');

?>