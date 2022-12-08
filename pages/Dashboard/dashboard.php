 <?php

    require_once './scripts/autenticado.php';
    require_once './scripts/validadorDeAcessoAdministrativo.php';

    require './dataBase/config.php';

    $sql = $pdo->query('SELECT * FROM usuario');

    $usuariosApp = $sql->fetchAll(PDO::FETCH_ASSOC);

    ?>
 <!DOCTYPE html>
 <html lang="en">

 <div class="table-container">
     <table class="dashboard">
         <thead>
             <tr>
                 <th>Imagem</th>
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
                     <td>
                         <div class="dash_boxImagem">
                             <img class="dash__imagem" src="<?php 
                             if($user['imagem'] != null){
                                echo $user['imagem'];
                             }else{
                                echo '/Sistema-escolar-Trabalho-Final-WEB-II/dataBase/userImagens/userPadrao.jpg';
                             }?>" alt="User image">
                         </div>
                     </td>
                     <td> <?php echo $user['id'] ?> </td>
                     <td> <?php echo $user['nome'] ?> </td>
                     <td> <?php echo $user['sobrenome'] ?> </td>
                     <td> <?php echo $user['nascimento'] ?> </td>
                     <td> <?php echo $user['matricula'] ?> </td>
                     <td> <?php echo $user['email'] ?> </td>
                     <td> <?php echo $user['acesso'] ?> </td>
                     <td class="editar"><a href="/Sistema-escolar-Trabalho-Final-WEB-II/index.php?page=perfil&id=<?php echo $user['id'] ?>" class="fa-solid fa-pencil"></a> </td>
                     <td class="excluir"><a href="./pages/Dashboard/Apagar/Apagar.php?id=<?php echo $user['id'] ?>" class="fa-solid fa-trash"></a></td>
                 </tr>
             <?php endforeach ?>
         </tbody>
         <tfoot>
             <tr>

             </tr>
         </tfoot>
     </table>
 </div>

 </html>