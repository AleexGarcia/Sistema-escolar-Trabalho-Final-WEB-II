<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title><?php $titulo ?></title>
</head>

<body>
    <?php
    require_once "components/Header/Header.php";
    ?>
    <main>
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            switch ($page) {
                case 'cadastro' :
                    $titulo = 'Cadastro';
                    require_once './Pages/Cadastro/Cadastro.php';
                    break;
                case 'contato':
                    $titulo = 'Contato';
                    require_once './Pages/Contato/Contato.php';
                    break;
                case 'login':
                    $titulo = 'Login';
                    require_once './Pages/Login/Login.php';
                    break;
                case 'home':
                    $titulo = 'Home';
                    require_once './Pages/Home/Home.php';
                    break;
                case 'dashboard':
                    $titulo = 'Dashboard';
                    require_once './Pages/Dashboard/dashboard.php';
                    break;
                case 'perfil':
                    $titulo = 'Perfil';
                    require_once './Pages/Perfil/Perfil.php';
                    break;
                case 'planoDeEnsino':
                    $titulo = 'Plano de Ensino';
                    require_once './Pages/PlanoDeEnsino/PlanoDeEnsino.php';
                    break;
            }
        } else {
            header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=login&login=erro2');
            exit;
        }

        ?>
    </main>
    <?php
    require_once 'components/Footer/Footer.php';
    ?>
</body>
<script src="./js/menu.js"></script>

</html>