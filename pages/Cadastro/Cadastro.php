<!DOCTYPE html>
<html lang="pt-br">
<?php
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
        <form action="CriaCadastro/CriaCadastro.php" method="post" class="formulario">
            <div class="inputBox">
                <label for="login" class="formulario__label">User:</label>
                <input required name="user" placeholder="Digite o CPF" type="text" id="login" class="formulario__input">
            </div>
            <div class="inputBox">
                <label for="senha" class="formulario__label">Senha:</label>
                <input required name="senha" placeholder="Digite a senha" type="text" id="senha" class="formulario__input">
            </div>
            <div class="inputBox">
                <label for="acesso" class="formulario__label">Acesso:</label>
                <select required name="acesso" id="acesso" class="formulario__input">
                    <option value="administrador">Administrador</option>
                    <option value="funcionario">Funcionario </option>
                    <option value="aluno">Aluno</option>
                </select>
            </div>
            <? if (isset($_SESSION['cadastro'])) { 
               if($_SESSION['cadastro'] == 'sucesso'){ ?>
                  <span class="formulario__mensagemErro">Usuário cadastrado com sucesso!</span>     
              <? } ?>
              <? if($_SESSION['cadastro'] == 'erro1'){ ?>
                  <span class="formulario__mensagemErro">Usuário ja cadastrado!</span>     
              <? } ?>
              <? if($_SESSION['cadastro'] == 'erro2'){ ?>
                  <span class="formulario__mensagemErro">Informe usuario, senha e selecione o tipo de acesso!</span>     
              <? } ?>
            ?>
            <button class="formulario__button" type="submit">Cadastrar</button>
        </form>
    </main>
    <?php
    require_once '../../components/Footer/Footer.php';
    ?>
</body>

</html>