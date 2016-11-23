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
        <h1>Pesquisa de Produto</h1>
            <form action="#">
                     <div class="col-ms-4">
                     
                        Nome:  <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="nome_p">
                        <br />
                        Preço:  <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="preco_produto" >
                        <br />
                       
                        <input type="submit" class="btn btn-default" name="Enviar">
               

                      
                        
        </div>

        <?php
            echo finalizapagina();
        ?>

</html>
