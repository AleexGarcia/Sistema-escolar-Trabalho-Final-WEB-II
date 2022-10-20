<?php
      session_start();
    
      //verificando se usuario não foi autenticado e redirecionando para pagina de login
  
      if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
  
        echo 
        '<header class="header">
            <div class="header__box container">
                <img class="header__logo" src="/Sistema-escolar-Trabalho-Final-WEB-II/assets/img/logo.png" alt="Logo Hogwarts">
                <i class="header__menuIcon solid fa-bars" id="menu"></i>
                <nav class="header__navigation">
                    <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Home/Home.php">Home</a>
                    <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Login/Login.php">Login</a>
                    <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/PlanoDeEnsino/PlanoDeEnsino.php">Plano de ensino</a>
                    <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Contato/Contato.php">Contato</a>
                </nav>
            </div>
         </header>';
      }else{
        echo 
        '<header class="header">
            <div class="header__box container">
                <img class="header__logo" src="/Sistema-escolar-Trabalho-Final-WEB-II/assets/img/logo.png" alt="Logo Hogwarts">
                <i class="header__menuIcon solid fa-bars" id="menu"></i>
                <nav class="header__navigation">
                    <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Home/Home.php">Home</a>
                    <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Login/Login.php">Login</a>
                    <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/PlanoDeEnsino/PlanoDeEnsino.php">Plano de ensino</a>
                    <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Contato/Contato.php">Contato</a>
                    <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/scripts/Logoff.php">Logout</a>
                </nav>
            </div>
         </header>';
      }
