<?php

require '../../../dataBase/config.php';
session_start();

//pegando valores do formulario
$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$acesso = filter_input(INPUT_POST, 'acesso', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$id = null;
if ($user && $senha && $acesso) {
    //checando se ja existe esse usuario
    $sql = $pdo->prepare('SELECT * FROM usuario WHERE user=:user');
    $sql->bindValue(":user", $user);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO usuario (id, acesso, user, senha) VALUES (:id, :acesso, :user, :senha)");
        $sql->bindValue(':id', $id);
        $sql->bindValue(':acesso', $acesso);
        $sql->bindValue(':user', $user);
        $sql->bindValue(':senha', $senha);
        $sql->execute();
        $_SESSION['cadastro'] = 'sucesso';
        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Cadastro/Cadastro.php');
    } else {
        $_SESSION['cadastro'] = 'erro1';
        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Cadastro/Cadastro.php');
    }
} else {
    $_SESSION['cadastro'] = 'erro2';
    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Cadastro/Cadastro.php');
}

$sql = $pdo->prepare('SELECT * FROM usuario');
