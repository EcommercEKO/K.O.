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

<?php

$id = $_POST['valor'];

 ?>
    <!-- Page Content -->
  <div class="container">
    

            <div class="col-md-91">
            <form action="#" method="post">
                <div class="thumbnail1">
                     <img class="img1-responsive" src="<?php echo imagem("$id")?>" alt=""> 
                    <div class="caption-full">
                        <h4 class="pull-right" id="precoProd"><h4>R$<?php echo preco("$id")?></h4>
                        <h4><a href="#" id="nomeProd" ><?php echo nomeProd("$id")?></a>
                        </h4>
                        <p><?php echo descri("$id")?></p>
                    </div>
                    <div class="ratings">
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                      Quantidade  <select class="form-control" type="text" id="qtd">
                            <option value= "1"> 
                                1
                            </option>
                            <option value= "2"> 
                                2
                            </option>
                            <option value= "3"> 
                                3
                            </option>
                            <option value= "4"> 
                                4
                            </option>
                            <option value= "5">
                                5
                            </option>
                            
                        </select>
                        <br>
                      
                     <button type="submit" id="valor" value="<?php echo $id;?>" name="valor" class="btn">Comprar</button>
                     </form>
                </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <?php
       echo finalizapagina();
    ?>

</html>
