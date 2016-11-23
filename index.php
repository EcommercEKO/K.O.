<?php 
require_once('funcoes.php');
?>
<!DOCTYPE html>
<html lang="en">

   <?php 
        echo iniciaPagina();
        echo criaMenu();
    ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead"><strong>Categorias</strong></p>
                <div class="list-group">
                    <a href="categoria.php" class="list-group-item">Camisetas</a>
                    <a href="#" class="list-group-item">Livros</a>
                    <a href="#" class="list-group-item">Acessórios</a>
					<a href="#" class="list-group-item">Colecionáveis</a>
					<a href="#" class="list-group-item">Colecionáveis</a>
					<a href="#" class="list-group-item">Decoração</a>
					
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
                            <img src="http://statick1.bseller.com.br/product/30117/150859_1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">R$ 99,99</h4>
                                <h4><a href="produtos.php">Metal Earth Bird of Prey (StarTrek)</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 visualizações</p>
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
                            <img src="http://statick1.bseller.com.br/product/61234/305196_CAMISETA_PRETA_400X520-%25282%2529.png" alt="">
                            <div class="caption">
                                <h4 class="pull-right">R$20,00</h4>
                                <h4><a href="#">Camiseta Be Like a Panda NEW </a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 visualizações</p>
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
                            <img src="http://statick1.bseller.com.br/product/64097/306114_CAMISETA_CINZA_MESCLA_400X520.png" alt="">
                            <div class="caption">
                                <h4 class="pull-right">R$25.99</h4>
                                <h4><a href="#">Camiseta The Kingdom</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 visualizações</p>
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
                            <img src="http://statick1.bseller.com.br/product/30112/150929_1.jpg" alt="">
                            <div class="caption">
                                <h4 class="pull-right">R$91,99</h4>
                                <h4><a href="#">Metal Earth Klingon Vorcha (StarTrek)</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 visualizações</p>
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
                            <img src="http://statick1.bseller.com.br/product/62930/305073_CAMISETA_BRANCA_2_1000X1000.png" alt="">
                            <div class="caption">
                                <h4 class="pull-right">R$ 65.99</h4>
                                <h4><a href="#">Camiseta Go steal them all</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">1800 visualizações</p>
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
                        <p>If you like this template, then check out <a target="_blank" href="">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="">Veja mais</a>
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
