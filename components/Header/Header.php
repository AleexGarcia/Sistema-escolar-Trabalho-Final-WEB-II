<?php

if (isset($_COOKIE["id"])) {
    require 'dataBase/config.php';
    $id = base64_decode($_COOKIE['id']);
    $sql = 'SELECT * FROM usuario WHERE' . ' usuario.id' . " =  $id";
    $statement = $pdo->query($sql);
    $user = $statement->fetchAll(PDO::FETCH_ASSOC);
    $nomeBanco = $user[0]['nome'];
    $imagem = $user[0]['imagem'] != null ? $user[0]['imagem'] : '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/userPadrao.jpg';
}
?>
<html>
<header class="header">
    <div class="header__box container">
        <img class="header__logo" src="/Sistema-escolar-Trabalho-Final-WEB-II/assets/img/logo.png" alt="Logo Hogwarts">
        <i class="header__menuIcon solid fa-bars" id="menu"></i>
        <nav class="header__navigation">
            <i id="close" class="close fa-solid fa-x"></i>
            <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=home">Home</a>
            <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=contato">Contato</a>
            <?php if (isset($_COOKIE['acesso']) && $_COOKIE['acesso'] == md5('administrador')) { ?>
                <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=dashboard">Dashboard</a>
                <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=cadastro">Cadastro</a>
            <?php } ?>
            <!-- //verificando se usuario não foi autenticado e redirecionando para pagina de login -->
            <?php if (!isset($_COOKIE['token'])) { ?>
                <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=login">Login</a>
            <?php } else { ?>
                <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=matricula">Matricula</a>
                <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=perfil">Perfil</a>'
                <a class="header__link" href="/Sistema-escolar-Trabalho-Final-WEB-II/scripts/Logoff.php">Logout</a>'
            <?php } ?>
        </nav>
        <?php if (isset($_COOKIE['token'])) { ?>
            <div class="userBox"> <span class="userName"><?php $nomeBanco ?></span>
                <div class="boxImagem">
                    <img class="user__imagem" src="<?php $imagem ?>" alt="User image">
                </div>
            </div>
        <?php  } ?>
    </div>
</header>

</html>