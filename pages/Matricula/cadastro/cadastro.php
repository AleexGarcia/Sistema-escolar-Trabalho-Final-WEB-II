<?php

require_once '../../../dataBase/config.php';
$idEnvio = base64_decode($_COOKIE['id']);
$matriculaRecebida = $_POST['disciplina'];


$sql = "UPDATE usuario SET materias = :materias WHERE". " usuario.id" . " =  $idEnvio";
if($matriculaRecebida != null){
    $materias = json_encode($matriculaRecebida);
    if($materias){
    
        $statement = $pdo->prepare($sql);
        
        $statement->bindValue(':materias', $materias);
    
        $statement->execute();
        
        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=home');
        exit;
    }
}else{
    $materias = null;
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':materias', $materias);
    $statement->execute(); 
    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=home');
    exit;
}


