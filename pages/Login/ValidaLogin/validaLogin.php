<?php 
    
    session_start();

    
    //variavel que verifica se a autenticação foi realizada
    $usuarioAutenticado = false;
    $typeUser = null;
    //Banco de dados de usuarios
    $usuariosApp = array(
        array('id'=> 1, 'acesso' => 'administrador', 'user' => 'admin', 'senha' => '123'),
        array('id'=> 2, 'acesso' => 'funcionario', 'user' => 'professor', 'senha' => '1234'),
        array('id'=> 3, 'acesso' => 'aluno', 'user' => 'aluno', 'senha' => '1234'),
    );


    //dados recebidos do formulario
    
    $loginRecebido =  filter_input(INPUT_POST,'user',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $senhaRecebida =  filter_input(INPUT_POST,'senha',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

   //verificando se o login é válido
    foreach($usuariosApp as $user){
        if($user['user'] === $loginRecebido && $user['senha'] === $senhaRecebida){
            $usuarioAutenticado = true;
            $typeUser = $user['acesso'];
        }
    }
    //Ação se atenticado ou nao
    if($usuarioAutenticado){
        $expiracao = time() + 86400 * 5;
        setcookie("token","acessoPermitido", $expiracao ,'/');
        setcookie("acesso", $typeUser, $expiracao ,'/');
        $_SESSION['autenticado'] = 'SIM';
        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Home/Home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/Pages/Login/Login.php?login=erro');
    }
