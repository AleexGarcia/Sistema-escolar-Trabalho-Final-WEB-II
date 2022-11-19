<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>E.M.B. de Hogwarts</title>
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
                case 'matricula':
                    $titulo = 'matricula';
                    require_once './Pages/Matricula/Matricula.php';
                    break;
            }
        } else {
            require_once './scripts/autenticado.php';
            header('Location: /Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=home');
            exit;
        }

        ?>
    </main>
    <?php
    require_once 'components/Footer/Footer.php';
    ?>
    
</body>
<script src="./js/menu.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>