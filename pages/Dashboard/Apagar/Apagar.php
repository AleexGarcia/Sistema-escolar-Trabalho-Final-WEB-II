<?php
$id = $_GET['id'];

require '../../../dataBase/config.php';

$sql = 'SELECT * FROM usuario WHERE' . ' usuario.id' . " =  $id";
$statement = $pdo->query($sql);
$user = $statement->fetchAll(PDO::FETCH_ASSOC);
$imagemNome = $user[0]['imagemNome'] != null ? $user[0]['imagemNome'] : '';
if($imagemNome != 'userPadrao' || $imagemNome == ''){
    echo "entrei aqui";
    unlink("../../../dataBase/userImagens/$imagemNome.jpg");
}

$sql2 = 'DELETE FROM usuario WHERE'.' usuario.id'.' = :id';
$statement2 = $pdo-> prepare($sql2);
$statement2->bindParam(':id',$id,PDO::PARAM_INT);
$statement2-> execute();

header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=dashboard');
exit;