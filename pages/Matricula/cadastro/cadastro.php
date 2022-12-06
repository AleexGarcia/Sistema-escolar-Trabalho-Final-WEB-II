<?php

require_once '../../../dataBase/config.php';

$matriculaRecebida = $_POST['disciplina'];

$materias = json_encode($matriculaRecebida);
$idEnvio = base64_decode($_COOKIE['id']);

$sql = "UPDATE usuario SET materias = :materias WHERE". " usuario.id" . " =  $idEnvio";
if($materias){

    $statement = $pdo->prepare($sql);
    
    $statement->bindValue(':materias', $materias);

    $statement->execute();
    
    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=home');
    exit;
}