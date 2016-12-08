<?php 
require_once('funcoes.php');
require_once('conexao.php');
if (!isset($_SESSION)) {
    echo"<script language='javascript' type='text/javascript'>alert('acesso Negado');window.location.href='index.php';</script>";

}
?>
<!DOCTYPE html>
<html lang="en">
    <?php 

        echo iniciaPagina();
        echo criaMenu();
    ?>
    
    <div class="container">
        <h1>Cadastro de Produto</h1>
        <form action="cadastra_produto.php" method="POST" enctype="multipart/form-data">
            <div class="col-ms-4">

                <p id="pcontato">Nome:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="nome_produto">
               <br />
                 <p id="pcontato">Preço:</p><br /><input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="preco_produto">
                <br />
                 <p id="pcontato">Foto1:</p><br /> <input type="file" name="arquivo">
                <br />
                 <p id="pcontato">Foto 2:</p> <br /><input type="file" name="arquivo2">
                <br />
                 <p id="pcontato">Foto 3:</p><br /> <input type="file" name="arquivo3">
                <br />
              
                 <p id="pcontato">Não sou robo:</p> <input type="checkbox" name="robozinho">
                <input type="submit" class="btn btn-default" name="Enviar">
            </div>
        </form>                        
    </div>

    <?php
        echo finalizapagina();
    ?>

</html>
