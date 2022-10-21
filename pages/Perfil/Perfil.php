<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Perfil.css">
    <title>Perfil</title>
</head>

<body>
    <?php
    require_once "../../components/Header/Header.php";
    ?>
    <main>
        <section class="perfil">
            <h1 class="perfil__titulo">Editar perfil</h1>
            <form class="perfil__form" action="editorPerfil/editorPerfil.php" method="post">
                <div class="search-box">
                    <div class="boxImgPerfil">
                        <img class="perfil__imagem" src="../../assets/img/perfil.png" alt="">
                        <label for="foto" class="foto__label fa-solid fa-pencil"></label>
                    </div>
                    <input type="file" name="foto" id="foto">
                </div>
                <div class="search-box">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome">
                </div>
                <div class="search-box">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" name="sobrenome" id="sobrenome">
                </div>
                <div class="search-box">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="search-box">
                    <label for="senha">Alterar senha</label>
                    <input type="senha" name="senha" id="senha">
                </div>
                <div class="search-box date">
                    <label for="dataNascimento">Data de Nascimento</label>
                    <input type="date" name="dataNascimento" id="dataNascimento">
                </div>
                <button class="perfil__button" type="submit">Editar</button>
            </form>
        </section>
    </main>
    <?php
    require_once '../../components/Footer/Footer.php';
    ?>
</body>

</html>