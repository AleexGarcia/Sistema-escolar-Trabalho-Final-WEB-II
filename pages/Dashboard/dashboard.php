<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    require_once "../../components/Header/Header.php";
    ?>
    <main>
       <table class="dashboard">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Acesso</th>
                    <th>User</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> 1 </td>
                    <td> Administrador </td>
                    <td> alexandre </td>
                    <td>  </td>
                    <td>  </td>
                </tr>
            </tbody>
            <tfoot>

            </tfoot>
       </table>
    </main>
    <?php
    require_once '../../components/Footer/Footer.php';
    ?>
</body>
</html>

