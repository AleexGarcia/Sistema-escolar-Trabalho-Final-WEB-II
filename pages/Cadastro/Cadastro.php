<!DOCTYPE html>
<html lang="pt-br">
<?php
//session_start();
//require_once '../../scripts/validadorAcesso.php';
//if (isset($_COOKIE['acesso']) && $_COOKIE['acesso'] != md5('administrador')) {
//    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Home/Home.php');
//    exit;
//}

?>

<section>
    <h2>Cadastrar novo usuário</h2>
    <form action="CriaCadastro/CriaCadastro.php" method="post" class="formulario">
        <div class="inputBox">
            <label for="matricula" class="formulario__label">Matricula:</label>
            <input name="matricula" placeholder="Informe a matricula" type="text" id="matricula" class="formulario__input">
        </div>
        <div class="inputBox">
            <label for="senha" class="formulario__label">Senha:</label>
            <input name="senha" placeholder="Digite a senha" type="password" id="senha" class="formulario__input">
        </div>
        <div class="inputBox">
            <label for="nome" class="formulario__label">Nome:</label>
            <input name="nome" placeholder="Digite o nome" type="text" id="nome" class="formulario__input">
        </div>
        <div class="inputBox">
            <label for="sobrenome" class="formulario__label">Sobrenome:</label>
            <input name="sobrenome" placeholder="Digite o sobrenome" type="text" id="sobrenome" class="formulario__input">
        </div>
        <div class="inputBox">
            <label for="email" class="formulario__label">Email:</label>
            <input name="email" placeholder="Digite o email" type="email" id="email" class="formulario__input">
        </div>
        <div class="inputBox">
            <label for="nascimento" class="formulario__label">Data de nascimento:</label>
            <input name="nascimento" type="date" id="nascimento" class="formulario__input">
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
</section>

</html>