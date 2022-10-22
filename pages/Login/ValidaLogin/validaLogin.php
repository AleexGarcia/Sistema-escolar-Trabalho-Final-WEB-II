<?php 
    
    session_start();
    //requisição do dataBase
   
    require '../../../dataBase/config.php';
    $sql = $pdo -> query('SELECT * FROM usuario');

    //variavel que verifica se a autenticação foi realizada
   
    $usuarioAutenticado = false;
    $typeUser = null;
    
    //Banco de dados de usuarios
    
    $usuariosApp = $sql-> fetchAll(PDO::FETCH_ASSOC);

    //dados recebidos do formulario
    
    $loginRecebido =  filter_input(INPUT_POST,'matricula',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $senhaRecebida =  filter_input(INPUT_POST,'senha',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

   //verificando se o login é válido
 
   foreach($usuariosApp as $user){
        if($user['matricula'] === $loginRecebido && $user['senha'] === $senhaRecebida){
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
