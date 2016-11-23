<?php 
require_once('funcoes.php');
?>
<!DOCTYPE html>
<html lang="en">

   <?php 
        echo iniciaPagina();
        echo criaMenu();
    ?>
    <div class="container">

        <br><br><br><br><br><br><br><br>
         <a href="cadastroUsuario.php"  class="btn btn-primary btn-lg btn-block" role="button">Cadastrar Usuário</a>
         <br><br>
         <a href="pesquisaUsuario.php" class="btn btn-default btn-lg btn-block" role="button">Pesquisar Usuário</a>
           <br><br><br><br><br><br><br><br>
                

                      
                        
        </div>

        <?php
            echo finalizapagina();
        ?>

</html>
