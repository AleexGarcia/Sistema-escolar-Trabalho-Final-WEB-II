<?php

require '../../../dataBase/config.php';

$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$acesso = filter_input(INPUT_POST, 'acesso', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$imagem = $_FILES('foto');
$id = $_GET['id'] | $_COOKIE['id'];

$sql = "UPDATE usuario SET acesso = :acesso , matricula = :matricula , senha = :senha ,nome = :nome ,sobrenome = :sobrenome ,nascimento = :nascimento ,email = :email WHERE". " usuario.id" . " =  $id";


if($matricula && $senha && $nome && $sobrenome && $email && $nascimento && $acesso ){

    $statement = $pdo->prepare($sql);
    
    $statement->bindValue(':acesso', $acesso);
    $statement->bindValue(':matricula', $matricula);
    $statement->bindValue(':senha', $senha);
    $statement->bindValue(':nome', $nome);
    $statement->bindValue(':sobrenome', $sobrenome);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':nascimento', $nascimento);
    
    $statement->execute();
    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Perfil/Perfil.php');
}else{
    
}
