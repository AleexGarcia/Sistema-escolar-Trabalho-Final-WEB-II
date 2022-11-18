<?php

require '../../../dataBase/config.php';

$matricula = filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senhaCriptografada = md5($senha);


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$acesso = filter_input(INPUT_POST, 'acesso', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$imagemRecebida = $_FILES['foto'];


if(isset($_GET['id'])){
    
    $id = $_GET['id'];

    if($imagemRecebida['name'] != NULL) {
	
        $nomeFinal = time().'.jpg';
        $localRefPerfil = "../../../dataBase/userImagens/$nomeFinal";
        move_uploaded_file($imagemRecebida['tmp_name'], $localRefPerfil);
        $localInicio = 	"/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/$nomeFinal";
        
    }else{
        $sql = 'SELECT * FROM usuario WHERE' . ' usuario.id' . " =  $id";
        $statement = $pdo->query($sql);
        $user = $statement->fetchAll(PDO::FETCH_ASSOC);
        $localInicio = $user[0]['imagem'] != null ? $user[0]['imagem'] : '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/userPadrao.jpg';
        $nomeFinal = $user[0]['imagemNome'] != null ? $user[0]['imagemNome'] : 'userPadrao.jpg';
    }


    $sql = "UPDATE usuario SET acesso = :acesso , matricula = :matricula , senha = :senha ,nome = :nome ,sobrenome = :sobrenome ,nascimento = :nascimento ,email = :email, imagem = :imagem , imagemNome = :imagemNome WHERE". " usuario.id" . " =  $id";
    if($matricula && $senha && $nome && $sobrenome && $email && $nascimento && $acesso ){

        $statement = $pdo->prepare($sql);
        
        $statement->bindValue(':acesso', $acesso);
        $statement->bindValue(':matricula', $matricula);
        $statement->bindValue(':senha', $senhaCriptografada);
        $statement->bindValue(':nome', $nome);
        $statement->bindValue(':sobrenome', $sobrenome);
        $statement->bindValue(':nascimento', $nascimento);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':imagem', $localInicio);
        $statement->bindValue(':imagemNome', $nomeFinal);
        
        $statement->execute();
        
        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=dashboard');
        
        exit;
    }else{
   header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=perfil&erro=preenchimento');
        exit;
    }

}else{
    $id = base64_decode($_COOKIE['id']);
    
    if($imagemRecebida['name'] != NULL) {
	
        $nomeFinal = time().'.jpg';
        $localRefPerfil = "../../../dataBase/userImagens/$nomeFinal";
        move_uploaded_file($imagemRecebida['tmp_name'], $localRefPerfil);
        $localInicio = 	"/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/$nomeFinal";
        
    }else{
        $sql = 'SELECT * FROM usuario WHERE' . ' usuario.id' . " =  $id";
        $statement = $pdo->query($sql);
        $user = $statement->fetchAll(PDO::FETCH_ASSOC);
        $localInicio = $user[0]['imagem'] != null ? $user[0]['imagem'] : '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/userPadrao.jpg';
        $nomeFinal = $user[0]['imagemNome'] != null ? $user[0]['imagemNome'] : 'userPadrao.jpg';
    }


    $sql = "UPDATE usuario SET senha = :senha ,nome = :nome ,sobrenome = :sobrenome ,nascimento = :nascimento ,email = :email, imagem = :imagem , imagemNome = :imagemNome WHERE". " usuario.id" . " =  $id";

    if($senha && $nome && $sobrenome && $email && $nascimento ){

        $statement = $pdo->prepare($sql);
        
        $statement->bindValue(':senha', $senhaCriptografada);
        $statement->bindValue(':nome', $nome);
        $statement->bindValue(':sobrenome', $sobrenome);
        $statement->bindValue(':nascimento', $nascimento);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':imagem', $localInicio);
        $statement->bindValue(':imagemNome', $nomeFinal);
        
        $statement->execute();
    
    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=perfil');
        
    exit;
    }else{
    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=perfil&erro=preenchimento');
        exit;
    }
}



