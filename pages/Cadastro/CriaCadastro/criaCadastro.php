<?php

require '../../../dataBase/config.php';

//pegando valores do formulario
$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$acesso = filter_input(INPUT_POST, 'acesso', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$id = null;
if ($matricula && $senha && $acesso && $nome && $sobrenome && $email && $nascimento) {
    //checando se ja existe esse usuario
    $sql = $pdo->prepare('SELECT * FROM usuario WHERE matricula=:matricula');
    $sql->bindValue(":matricula", $matricula);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO usuario (id, acesso, matricula, senha,nome,sobrenome,nascimento,email) VALUES (:id, :acesso, :matricula,:senha,:nome, :sobrenome, :nascimento, :email)");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':acesso', $acesso);
        $sql->bindValue(':matricula', $matricula);
        $sql->bindValue(':senha', $senha);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':sobrenome', $sobrenome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':nascimento', $nascimento);
        $sql->execute();
    
        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Cadastro/Cadastro.php?cadastro=sucesso');
    } else {
          
        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Cadastro/Cadastro.php?cadastro=erro1');
    }
} else {
 header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Cadastro/Cadastro.php?cadastro=erro2');
}

