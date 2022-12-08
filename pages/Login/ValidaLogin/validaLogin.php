<?php


//requisição do dataBase

require '../../../dataBase/config.php';
$sql = $pdo->query('SELECT * FROM usuario');

//variavel que verifica se a autenticação foi realizada

$usuarioAutenticado = false;
$typeUser = null;
$id = null;
//Banco de dados de usuarios

$usuariosApp = $sql->fetchAll(PDO::FETCH_ASSOC);

//dados recebidos do formulario

$loginRecebido =  filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senhaRecebida =  filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$senhaCriptografada = md5($senhaRecebida);
echo $senhaCriptografada;
//verificando se o login é válido

foreach ($usuariosApp as $user) {
    if ($user['matricula'] == $loginRecebido &&  ($user['senha']) == $senhaCriptografada) {
        $usuarioAutenticado = true;
        $id = base64_encode($user['id']);
        $token = md5($id . $loginRecebido . $senhaRecebida);
        $nomeCompleto = $user['nome']." ".$user['sobrenome'];
        $acesso = md5($user['acesso']);
    }
}

//Ação se atenticado ou nao

if ($usuarioAutenticado) {
    $expiracao = time() + 86400 * 5;
    setcookie("token", $token, $expiracao, '/');
    setcookie("id", $id, $expiracao, '/');
    setcookie("nome", $nomeCompleto, $expiracao, '/');
    setcookie("acesso", $acesso, $expiracao, '/');
    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=home');
    exit;
} else {
    header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=login&login=erro');
    exit;
}
