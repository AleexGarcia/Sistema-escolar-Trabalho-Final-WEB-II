
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sistema Escolar</title>
</head>

<body>
    <?php
    require_once "../../components/Header/Header.php";
    ?>
    <main>
        <form action="ValidaLogin/validaLogin.php" method="post" class="formulario">
            <div class="inputBox">
                <label for="login" class="formulario__label">Login:</label>
                <input name="user" placeholder="Digite sua matricula ou CPF" type="text" id="login" class="formulario__input">
            </div>
            <div class="inputBox">
                <label for="senha" class="formulario__label">Senha:</label>
                <input name="senha" placeholder="Digite sua senha" type="text" id="senha" class="formulario__input">
            </div>
            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                <span class="formulario__mensagemErro">
                    Usuário ou senha inválido(s)
                </span>

            <?php } ?>

            <button class="formulario__button" type="submit">Logar</button>
            <a class="formulario__link" href="#">Esqueceu a senha</a>
        </form>
    </main>
    <?php
    require_once '../../components/Footer/Footer.php';
    ?>
</body>

</html>