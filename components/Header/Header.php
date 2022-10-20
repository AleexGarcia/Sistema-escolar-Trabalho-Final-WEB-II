<?php
    echo '<header class="header">
    <div class="header__box container">
        <img class="header__logo" src="/Sistema-escolar-Trabalho-Final-WEB-II/assets/img/logo.png" alt="Logo Hogwarts">
        <i class="header__menuIcon solid fa-bars" id="menu"></i>
        <nav class="header__navigation">
            <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Home/Home.php">Home</a>
            <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/PlanoDeEnsino/PlanoDeEnsino.php">Plano de ensino</a>
            <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Contato/Contato.php">Contato</a>';
            if(isset($_COOKIE['acesso']) && $_COOKIE['acesso'] == 'administrador'){
                echo '<a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Cadastro/Cadastro.php">Cadastro</a>';
            }
            //verificando se usuario não foi autenticado e redirecionando para pagina de login
            if(!isset($_COOKIE['token']) || $_COOKIE['token'] != 'acessoPermitido'){
                echo '<a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Login/Login.php">Login</a>';
            }else{
              echo  '<a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/scripts/Logoff.php">Logout</a>';
            }
            
       echo '</nav>
    </div>
 </header>';
    


        
    
