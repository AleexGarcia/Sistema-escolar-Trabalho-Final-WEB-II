<?php 
    echo '<main>
        <form action="formulario.php" method="post" class="formulario">
            <div class="inputBox">
                <label for="login" class="formulario__label">Login:</label>
                <input placeholder="Digite sua matricula ou CPF" type="text" id="login" class="formulario__input">
            </div>
            <div class="inputBox">
                <label for="senha" class="formulario__label">Senha:</label>
                <input placeholder="Digite sua senha" type="text" id="senha" class="formulario__input">
            </div>
            <button class="formulario__button" type="submit">Logar</button>
            <a class="formulario__link" href="#">Esqueceu a senha</a>
        </form>
    </main>';
