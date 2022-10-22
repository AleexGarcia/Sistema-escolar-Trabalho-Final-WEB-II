<!DOCTYPE html>
<html lang="en">
<?php

require '../../dataBase/config.php';

$sql = $pdo->query('SELECT * FROM usuario');

$usuariosApp = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dashboard.css">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../../components/Header/Header.php";
    ?>
    <main>
        <div class="table-container">
            <table class="dashboard">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Data de Nascimento</th>
                        <th>Matricula</th>
                        <th>E-mail</th>
                        <th>Acesso</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuariosApp as $user) : ?>
                        <tr>
                            <td> <?php echo $user['id'] ?> </td>
                            <td> <?php echo $user['nome'] ?> </td>
                            <td> <?php echo $user['sobrenome'] ?> </td>
                            <td> <?php echo $user['nascimento'] ?> </td>
                            <td> <?php echo $user['matricula'] ?> </td>
                            <td> <?php echo $user['email'] ?> </td>
                            <td> <?php echo $user['acesso'] ?> </td>
                            <td class="editar"><a href="../Perfil/Perfil.php?id=<?php echo $user['id'] ?>" class="fa-solid fa-pencil"></a> </td>
                            <td class="excluir"><a href="../Dashboard/Apagar/Apagar.php?id=<?php echo $user['id'] ?>" class="fa-solid fa-trash"></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>

                    </tr>
                </tfoot>
            </table>
        </div>
    </main>
    <?php
    require_once '../../components/Footer/Footer.php';
    ?>
</body>

</html>