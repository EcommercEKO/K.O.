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
        
        echo criaCabecalho();
    ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead"><strong>Categorias</strong></p>
                <div class="list-group">
                    <a style="background:rgba(12, 12, 12, 0.7);color: white;border: 1px solid rgba(12, 12, 12, 0.7);" href="categoria1.php" class="list-group-item">Camisetas</a>
                    <a style="background:rgba(214, 30, 30, 0.7);color: white;border: 1px solid rgba(214, 30, 30, 0.7);" href="categoria2.php" class="list-group-item">Cachecois</a>
                    <a style="background:rgba(33, 115, 35, 0.75);color: white;border: 1px solid rgba(33, 115, 35, 0.75);" href="categoria3.php" class="list-group-item">Mochilas & Bolsas</a>
	
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://statick1.bseller.com.br/nerduniverse/assets/images/banners/topo/banner-mochilas.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://statick1.bseller.com.br/nerduniverse/assets/images/banners/topo/bannerhpch.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://statick1.bseller.com.br/nerduniverse/assets/images/banners/topo/bannertwdhome.gif" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                             <img  src="<?php echo imagem(3)?>" alt="">
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$20.00</h4>
                                <h4><a href="#">Camiseta Be Like a Panda NEW F</a>
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
                        <div class="thumbnail">
                        <img  src="<?php echo imagem(4)?>"  alt="" >
                            <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$20.00</h4>
                                <h4><a href="#">Camiseta Be Like a Panda NEW </a>
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
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                        <img src="<?php echo imagem(5)?>" alt="">
                        <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$25.99</h4>
                                <h4><a href="#">Camiseta The Kingdom</a>
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
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                           <img src="<?php echo imagem(1)?>" alt="">
                           <form method="post" action="produtos.php">                 
                            <div class="caption1">
                                <h4 class="pull-right1">R$89.99</h4>
                                <h4><a href="#">Metal Earth Klingon Vorcha</a>
                                </h4>
                                 <a href="produtos.php">
                          <button id="valor" value='1' name='valor' type='submit'/>Ver</button>
                          </a>
                      </form>
                            </div>
                            <div class="ratings">
                                <br>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo imagem(6)?>" alt="">
                            <form method="post" action="produtos.php"> 
                            <div class="caption1">
                                <h4 class="pull-right1">R$34.99</h4>
                                <h4><a href="#">Camiseta Give me Rupees</a>
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
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                  
                     
            
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Gostou do que viu?</a>
                        </h4>
                        <p style="color: #fff;">Visite o site de nosso maior fornecedor!!</p>
                        <a class="btn btn-primary" onclick="link()" target="_blank" href="">Veja mais</a>
                           <script>
                            function link()
                            {
                            var x;
                            var r=confirm("Link externo, deseja ir?");

                            if (r==true)
                              {
                              window.location.href = "http://www.nerduniverse.com.br/"
                              }
                            else
                              {
                             window.location.href = "#";
                              }
                            }
                        </script>
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
