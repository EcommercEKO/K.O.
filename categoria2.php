<?php 
require_once('funcoes.php');
require_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">

   <?php 
       echo iniciaPagina();
                  if (isset($_SESSION)){
             echo criaMenu();
        }
        else {
            echo criaMenu2();
            echo "<p style= 'color :white;'>Olá usuario</p>";
            }
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer2">
            <h1>Bem Vindo!</h1>
            <p>Aproveite nossas ofertas no setor de cachecois!!</p>
            
            </p>
        </header>

        <hr>

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row1 text-center">

            <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail3">
                             <img  src="<?php echo imagem(9)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$<?php echo preco(9)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(9)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='9' name='valor' type='submit'/>Ver</button>
                          </a>
                        </form>
                            </div>
                            <div class="ratings">
                                <br>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>

           <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail3">
                             <img  src="<?php echo imagem(10)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$ <?php echo preco(10)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(10)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='10' name='valor' type='submit'/>Ver</button>
                          </a>
                        </form>
                            </div>
                            <div class="ratings">
                                <br>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>


            <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail3">
                             <img  src="<?php echo imagem(11)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$<?php echo preco(11)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(11)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='11' name='valor' type='submit'/>Ver</button>
                          </a>
                        </form>
                            </div>
                            <div class="ratings">
                                <br>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>


                 



        </div>
        <!-- /.row -->

       <?php
            echo finalizapagina();
        ?>

</html>
