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
        <header class="jumbotron hero-spacer">
            <h1>Bem Vindo!</h1>
            <p>Aproveite nossas ofertas no setor de camisa!!</p>
            
            </p>
        </header>

        <hr>

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row1 text-center">

            <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail2">
                             <img  src="<?php echo imagem(3)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$<?php echo preco(3)?></h4>
                                <h4><a href="#"><p id="prod"><?php echo nomeProd(3)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='3' name='valor' type='submit'/>Ver</button>
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
                        <div class="thumbnail2">
                             <img  src="<?php echo imagem(4)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$ <?php echo preco(4)?></h4>
                                <h4><a href="#"><p id="prod"><?php echo nomeProd(4)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='4' name='valor' type='submit'/>Ver</button>
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
                        <div class="thumbnail2">
                             <img  src="<?php echo imagem(5)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$<?php echo preco(5)?></h4>
                                <h4><a href="#"><p id="prod"><?php echo nomeProd(5)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='5' name='valor' type='submit'/>Ver</button>
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
                        <div class="thumbnail2">
                             <img  src="<?php echo imagem(6)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$ <?php echo preco(6)?></h4>
                                <h4><a href="#"><p id="prod"><?php echo nomeProd(6)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='6' name='valor' type='submit'/>Ver</button>
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
                        <div class="thumbnail2">
                             <img  src="<?php echo imagem(7)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$ <?php echo preco(7)?></h4>
                                <h4><a href="#"><p id="prod"><?php echo nomeProd(7)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='7' name='valor' type='submit'/>Ver</button>
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
                        <div class="thumbnail2">
                             <img  src="<?php echo imagem(8)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$ <?php echo preco(8)?></h4>
                                <h4><a href="#"><p id="prod"><?php echo nomeProd(8)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='8' name='valor' type='submit'/>Ver</button>
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
        <header class="jumbotron hero-spacer">
            <h1>Bem Vindo!</h1>
            <p>Aproveite nossas ofertas no setor de camisa!!</p>
            
            </p>
        </header>

        <hr>

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row1 text-center">

            <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail2">
                             <img  src="<?php echo imagem(3)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$<?php echo preco(3)?></h4>
                                <h4><a href="#"><p id="prod"><?php echo nomeProd(3)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='3' name='valor' type='submit'/>Ver</button>
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
                        <div class="thumbnail2">
                             <img  src="<?php echo imagem(4)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$ <?php echo preco(4)?></h4>
                                <h4><a href="#"><p id="prod"><?php echo nomeProd(4)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='4' name='valor' type='submit'/>Ver</button>
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
                        <div class="thumbnail2">
                             <img  src="<?php echo imagem(5)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$<?php echo preco(5)?></h4>
                                <h4><a href="#"><p id="prod"><?php echo nomeProd(5)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='5' name='valor' type='submit'/>Ver</button>
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
                        <div class="thumbnail2">
                             <img  src="<?php echo imagem(6)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$ <?php echo preco(6)?></h4>
                                <h4><a href="#"><p id="prod"><?php echo nomeProd(6)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='6' name='valor' type='submit'/>Ver</button>
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
                        <div class="thumbnail2">
                             <img  src="<?php echo imagem(7)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$ <?php echo preco(7)?></h4>
                                <h4><a href="#"><p id="prod"><?php echo nomeProd(7)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='7' name='valor' type='submit'/>Ver</button>
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
                        <div class="thumbnail2">
                             <img  src="<?php echo imagem(8)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$ <?php echo preco(8)?></h4>
                                <h4><a href="#"><p id="prod"><?php echo nomeProd(8)?></p></a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='8' name='valor' type='submit'/>Ver</button>
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
