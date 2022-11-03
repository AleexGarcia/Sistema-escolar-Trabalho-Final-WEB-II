<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
require_once '../../scripts/validadorAcesso.php';
if (isset($_COOKIE['acesso']) && $_COOKIE['acesso'] != 'administrador') {
    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Home/Home.php');
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sistema Escolar</title>
</head>

<body>
    <?php
    require_once "../../components/Header/Header.php";
    ?>
    <main>
        <h2>Cadastrar novo usuário</h2>
        <form action="CriaCadastro/CriaCadastro.php" method="post" class="formulario">
            <div class="inputBox">
                <label for="matricula" class="formulario__label">Matricula:</label>
                <input name="matricula" placeholder="Informe a matricula" type="text" id="matricula" class="formulario__input">
            </div>
            <div class="inputBox">
                <label for="senha" class="formulario__label">Senha:</label>
                <input  name="senha" placeholder="Digite a senha" type="text" id="senha" class="formulario__input">
            </div>
            <div class="inputBox">
                <label for="nome" class="formulario__label">Nome:</label>
                <input  name="nome" placeholder="Digite o nome" type="text" id="nome" class="formulario__input">
            </div>
            <div class="inputBox">
                <label for="sobrenome" class="formulario__label">Sobrenome:</label>
                <input  name="sobrenome" placeholder="Digite o sobrenome" type="text" id="sobrenome" class="formulario__input">
            </div>
            <div class="inputBox">
                <label for="email" class="formulario__label">Email:</label>
                <input  name="email" placeholder="Digite o email" type="email" id="email" class="formulario__input">
            </div>
            <div class="inputBox">
                <label for="nascimento" class="formulario__label">Data de nascimento:</label>
                <input  name="nascimento" type="date" id="nascimento" class="formulario__input">
            </div>
            <div class="inputBox">
                <label for="acesso" class="formulario__label">Acesso:</label>
                <select name="acesso" id="acesso" class="formulario__input">
                    <option value="administrador">Administrador</option>
                    <option value="funcionario">Funcionario </option>
                    <option value="aluno">Aluno</option>
                </select>
            </div>
           <?php if (isset($_GET['cadastro'])) { ?>
                <?php if ($_GET['cadastro'] == 'sucesso') { ?>
                    <span class="formulario__mensagemErro">Usuário cadastrado com sucesso!</span>
                <?php } ?>
                <?php if ($_GET['cadastro'] == 'erro1') { ?>
                    <span class="formulario__mensagemErro">Usuário ja cadastrado!</span>
                <?php } ?>
                <?php if ($_GET['cadastro'] == 'erro2') { ?>
                    <span class="formulario__mensagemErro">Informe usuario, senha e selecione o tipo de acesso!</span>
                <?php } ?>
            <?php } ?>
            <button class="formulario__button" type="submit">Cadastrar</button>
        </form>
    </main>
    <?php
    require_once '../../components/Footer/Footer.php';
    ?>
</body>

</html>
