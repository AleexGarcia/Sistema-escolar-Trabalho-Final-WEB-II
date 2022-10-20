<?php 
    
    session_start();

    
    //variavel que verifica se a autenticação foi realizada
    $usuarioAutenticado = false;
    //Banco de dados de usuarios
    $usuariosApp = array(
        array('user' => 'admin', 'senha' => '123'),
        array('user' => 'professor', 'senha' => '1234'),
        array('user' => 'aluno', 'senha' => '1234'),
    );


    //dados recebidos do formulario
    
    $loginRecebido =  $_POST['user'];
    $senhaRecebida =  $_POST['senha'];

   //verificando se o login é válido
    foreach($usuariosApp as $user){
        if($user['user'] === $loginRecebido && $user['senha'] === $senhaRecebida){
            $usuarioAutenticado = true;
        }
    }
    //Ação se atenticado ou nao
    if($usuarioAutenticado){
        $_SESSION['autenticado'] = 'SIM';
        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Home/Home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Login/Login.php?login=erro');
    }
