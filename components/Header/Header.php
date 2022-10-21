<?php

$nome = 'Harry Potter';
$imagem = '../../assets/img/perfil.png';


echo '<header class="header">
    <div class="header__box container">
        <img class="header__logo" src="/Sistema-escolar-Trabalho-Final-WEB-II/assets/img/logo.png" alt="Logo Hogwarts">
        <i class="header__menuIcon solid fa-bars" id="menu"></i>
        <nav class="header__navigation">
        <i id="close" class="close fa-solid fa-x"></i>
            <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Home/Home.php">Home</a>
            <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/PlanoDeEnsino/PlanoDeEnsino.php">Plano de ensino</a>';
            if (isset($_COOKIE['acesso']) && $_COOKIE['acesso'] == 'administrador') {
                echo '<a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Cadastro/Cadastro.php">Cadastro</a>';
                echo '<a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Dashboard/Dashboard.php">Dashboard</a>';
            }
//verificando se usuario não foi autenticado e redirecionando para pagina de login
            if (!isset($_COOKIE['token']) || $_COOKIE['token'] != 'acessoPermitido') {
                echo '<a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Login/Login.php">Login</a>';
            } else {
                echo  '<a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Perfil/Perfil.php">Perfil</a>';
                echo  '<a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/scripts/Logoff.php">Logout</a>';
            }

        echo '</nav>';
        if (isset($_COOKIE['token']) || $_COOKIE['token'] == 'acessoPermitido') { 
            echo '
            <div class="userBox"> <span class="userName">'.$nome.'</span>
            <div class="boxImagem">
            <img class="user__imagem" src="'.$imagem.'" alt="">
        </div></div>';
        }
        echo '</div>
        </header>';

?>
<script src="../../js/menu.js"></script>