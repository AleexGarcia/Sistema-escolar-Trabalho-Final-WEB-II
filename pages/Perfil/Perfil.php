<!DOCTYPE html>
<html lang="en">
<?php

require_once '../../scripts/validadorAcesso.php';

if(isset($_GET['id']) && $_COOKIE['acesso'] == md5('administrador') || isset($_COOKIE['id'])){

    require '../../dataBase/config.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = base64_decode($_COOKIE['id']);
    }

    $sql = 'SELECT * FROM usuario WHERE' . ' usuario.id' . " =  $id";
    $statement = $pdo->query($sql);
    $user = $statement->fetchAll(PDO::FETCH_ASSOC);
    $nomeUser = $user[0]['nome'];
    $sobreNomeUser = $user[0]['sobrenome'];
    $emailUser = $user[0]['email'];
    $nascimentoUser = $user[0]['nascimento'];
    $matriculaUser = $user[0]['matricula'];
    $imagemUser = $user[0]['imagem'] != null ? $user[0]['imagem'] : '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/userPadrao.jpg';
}

?>

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
            <form class="perfil__form" action="./atualizaPerfil/atualizaPerfil.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
                <div class="search-box">
                    <div class="boxImgPerfil">
                        <img class="perfil__imagem" src="<?php echo $imagemUser ?>" alt="">
                        <label for="foto" class="foto__label fa-solid fa-pencil"></label>
                    </div>
                    <input type="file" name="foto" id="foto">
                </div>
                <div class="search-box">
                    <label for="nome">Nome</label>
                    <input <?php if ($nomeUser != '') {
                                echo "value= '$nomeUser'";
                            } else {
                                echo '';
                            } ?> type="text" name="nome" id="nome">
                </div>
                <div class="search-box">
                    <label for="sobrenome">Sobrenome</label>
                    <input <?php if ($sobreNomeUser != '') {
                                echo "value= '$sobreNomeUser'";
                            } ?> type="text" name="sobrenome" id="sobrenome">
                </div>
                <div class="search-box">
                    <label for="email">E-mail</label>
                    <input <?php if ($emailUser != '') {
                                echo "value='$emailUser'";
                            }
                            ?> type="email" name="email" id="email">
                </div>
                <div class="search-box">
                    <label for="senha">Alterar senha</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <div class="search-box date">
                    <label for="dataNascimento">Data de Nascimento</label>
                    <input <?php if ($nascimentoUser != '') {
                                echo "value='$nascimentoUser'";
                            }
                            ?> type="date" name="nascimento" id="dataNascimento">
                </div>
                <?php if (isset($_COOKIE['acesso']) && $_COOKIE['acesso'] == md5('administrador')) { ?>
                    <div class="search-box">
                        <label for="acesso" class="formulario__label">Acesso:</label>
                        <select name="acesso" id="acesso" class="formulario__input">
                            <option>Selecione o tipo de acesso</option>
                            <option value="administrador">Administrador</option>
                            <option value="funcionario">Funcionario </option>
                            <option value="aluno">Aluno</option>
                        </select>
                    </div>
                    <div class="search-box">
                        <label for="matricula" class="formulario__label">Matricula:</label>
                        <input <?php if ($matriculaUser != '') {
                                echo "value='$matriculaUser'";
                            }?>
                        
                        name="matricula" placeholder="Informe a matricula" type="text" id="matricula">
                    </div>
                <?php } ?>
                <?php if(isset($_GET['erro']) && $_GET['erro'] == 'preenchimento') { ?>
                    <span class="formulario__mensagemErro">Deve preencher todos os campos!</span>
                <?php } ?>
                <button class="perfil__button" type="submit">Editar</button>
            </form>
        </section>
    </main>
    <?php
    require_once '../../components/Footer/Footer.php';
    ?>
</body>

</html>
