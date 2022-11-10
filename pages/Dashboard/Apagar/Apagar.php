<?php
$id = $_GET['id'];

require '../../../dataBase/config.php';
$sql = 'DELETE FROM usuario WHERE'.' usuario.id'.' = :id';
$statement = $pdo-> prepare($sql);
$statement->bindParam(':id',$id,PDO::PARAM_INT);
$statement-> execute();

header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=dashboard');
exit;