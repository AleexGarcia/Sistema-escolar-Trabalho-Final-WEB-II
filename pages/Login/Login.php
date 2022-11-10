<!DOCTYPE html>
<html lang="pt-br">
        <form action="/Sistema-escolar-Trabalho-Final-WEB-II/Pages/Login/ValidaLogin/validaLogin.php" method="post" class="formulario">
            <div class="inputBox">
                <label for="login" class="formulario__label">Login:</label>
                <input name="matricula" placeholder="Digite sua matricula ou CPF" type="text" id="login" class="formulario__input">
            </div>
            <div class="inputBox">
                <label for="senha" class="formulario__label">Senha:</label>
                <input name="senha" placeholder="Digite sua senha" type="text" id="senha" class="formulario__input">
            </div>
            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                <span class="formulario__mensagemErro">
                    Usuário ou senha inválido(s)!
                </span>

            <?php } ?>
            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                <span class="formulario__mensagemErro">
                    Faça login antes de acessar as paginas protegidas!
                </span>

            <?php } ?>

            <button class="formulario__button" type="submit">Logar</button>
            <a class="formulario__link" href="#">Esqueceu a senha</a>
        </form>
</html>