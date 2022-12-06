<?php
require_once './dataBase/config.php';

$sql = "SELECT materias, acesso FROM usuario ";
$statement = $pdo->query($sql);
$dados = $statement->fetchAll(PDO::FETCH_ASSOC);

//print_r($materias);
$arrayDeArrayDeMaterias = array();
$numeroDeAlunos = 0;
$numeroDeAlunosNaoMatriculado = 0;
foreach($dados as $dado){
    $JsonDeMaterias = $dado['materias'];
    $materias = json_decode($JsonDeMaterias );
    $tipoDeUsuario = $dado['acesso'];
    if($materias != null){
        array_push($arrayDeArrayDeMaterias,$materias);
    }
    if($tipoDeUsuario == 'aluno'){
        $numeroDeAlunos++;
        if($materias == null){
            $numeroDeAlunosNaoMatriculado++;
        }
    }
}

function quantidadeDeMatriculados($arrayDeArrayDeMaterias, $valueDaMateria){
    
    $quantidadeDeMatriculados = 0;
    foreach($arrayDeArrayDeMaterias as $arrayDeMaterias){
        foreach($arrayDeMaterias as $materia){
            if($materia == $valueDaMateria){
                $quantidadeDeMatriculados++;
            }
        }
    }
    return $quantidadeDeMatriculados;
};

$arrayDeQuantidadeDeMatriculados = array(
    "feiticos" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"feiticos"),
    "transformacoes" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"transformacoes"),
    "pocoes" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"pocoes"),
    "defesasContraTrevas" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"defesasContraTrevas"),
    "vooVassoura" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"vooVassoura"),
    "herbologia" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"herbologia"),
    "astronomia" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"astronomia"),
    "historiaDaMagia" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"historiaDaMagia"),
    "criaturasMagicas" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"criaturasMagicas"),
    "adivinhacao" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"adivinhacao"),
    "aritmancia" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"aritmancia"),
    "runasAntigas" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"runasAntigas"),
    "EstudosDosTrouxas" => quantidadeDeMatriculados($arrayDeArrayDeMaterias,"EstudosDosTrouxas")
);

