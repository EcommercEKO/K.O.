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
        <h1>Pesquisa de Usuario</h1>
            <form action="#">
                     <div class="col-ms-4">
                     
                        Nome:  <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="nome_p">
                        <br />
                        CPF: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock"name="cpf_p" maxlength="11">
                         <br />
                        Data de Nascimento: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="data_p" maxlength="10">
                        <br />
                       
                        <input type="submit" class="btn btn-default" name="Enviar">
               

                      
                        
        </div>

        <?php
            echo finalizapagina();
        ?>

</html>
