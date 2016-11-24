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
        <h1>Cadastro de Produto</h1>
        <form action="cadastra_produto.php" method="POST" enctype="multipart/form-data">
            <div class="col-ms-4">
               Nome: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="nome_produto">
               <br />
                Preço:<input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="preco_produto">
                <br />
                Foto1: <input type="file" name="arquivo">
                <br />
                Foto 2: <input type="file" name="arquivo2">
                <br />
                Foto 3: <input type="file" name="arquivo3">
                <br />
              
                Não sou robo: <input type="checkbox" name="robozinho">
                <input type="submit" class="btn btn-default" name="Enviar">
            </div>
        </form>                        
    </div>

    <?php
        echo finalizapagina();
    ?>

</html>
