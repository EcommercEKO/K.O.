<?php 
require_once('funcoes.php');
require_once('conexao.php');
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
                     
                         <p class="pcontato">Nome:</p>  <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="nome_p">
                        <br />
                         <p class="pcontato">Preço:</p>  <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="preco_produto" >
                        <br />
                       
                        <input type="submit" class="btn btn-default" name="Enviar">
               

                      
                        
        </div>

        <?php
            echo finalizapagina();
        ?>

</html>
