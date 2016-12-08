<<<<<<< HEAD
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
        <header class="jumbotron hero-spacer3">
            <h1>Bem Vindo!</h1>
            <p>Aproveite nossas ofertas no setor de Mochilas & Bolsas!!</p>
            
            </p>
        </header>

        <hr>

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row1 text-center">

            <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail3">
                             <img  src="<?php echo imagem(12)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$<?php echo preco(12)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(12)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='12' name='valor' type='submit'/>Ver</button>
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
                             <img  src="<?php echo imagem(13)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$ <?php echo preco(13)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(13)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='13' name='valor' type='submit'/>Ver</button>
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
                             <img  src="<?php echo imagem(14)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$<?php echo preco(14)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(14)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='14' name='valor' type='submit'/>Ver</button>
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
                             <img  src="<?php echo imagem(15)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$<?php echo preco(15)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(15)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='15' name='valor' type='submit'/>Ver</button>
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
                             <img  src="<?php echo imagem(16)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$<?php echo preco(16)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(16)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='16' name='valor' type='submit'/>Ver</button>
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
                             <img  src="<?php echo imagem(17)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$<?php echo preco(17)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(17)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='17' name='valor' type='submit'/>Ver</button>
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
=======
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
        <header class="jumbotron hero-spacer3">
            <h1>Bem Vindo!</h1>
            <p>Aproveite nossas ofertas no setor de Mochilas & Bolsas!!</p>
            
            </p>
        </header>

        <hr>

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row1 text-center">

            <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail3">
                             <img  src="<?php echo imagem(12)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$<?php echo preco(12)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(12)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='12' name='valor' type='submit'/>Ver</button>
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
                             <img  src="<?php echo imagem(13)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$ <?php echo preco(13)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(13)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='13' name='valor' type='submit'/>Ver</button>
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
                             <img  src="<?php echo imagem(14)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$<?php echo preco(14)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(14)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='14' name='valor' type='submit'/>Ver</button>
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
                             <img  src="<?php echo imagem(15)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$<?php echo preco(15)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(15)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='15' name='valor' type='submit'/>Ver</button>
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
                             <img  src="<?php echo imagem(16)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$<?php echo preco(16)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(16)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='16' name='valor' type='submit'/>Ver</button>
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
                             <img  src="<?php echo imagem(17)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right2">R$<?php echo preco(17)?></h4>
                                <h4><a href="#"><p id="prod3"><?php echo nomeProd(17)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='17' name='valor' type='submit'/>Ver</button>
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
>>>>>>> 21ff125e080dcf5b911b9300b4ae0603d5a89787
