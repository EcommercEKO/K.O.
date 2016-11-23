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
         <a href="cadastroProduto.php" class="btn btn-primary btn-lg btn-block" role="button">Cadastrar Produto</a>
         <br><br>
         <a href="PesquisaProduto.php" class="btn btn-default btn-lg btn-block" role="button">Pesquisar Produto</a>
           <br><br><br><br><br><br><br><br>
                

                      
                        
        </div>

        <?php
            echo finalizapagina();
        ?>

</html>
