<?php
    require_once('conexao.php');
	define('DATE', date('d/m/Y'));

	$link = array
	  (
	  array("http://www.tecmundo.com.br/","_imagem/tecmundo.png"),
	  array("http://www.techtudo.com.br/","_imagem/TechTudo.png")
	  );


	function iniciaPagina (){
		return '<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>K.O Strore</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!--- Custom JavaScript -->
     <link rel="script" href="http://milanmilosev.com/external/codepen/js/copyright.js">
    <link rel="script" href="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>';

	}

	function criaCabecalho () {
		return '
		<div class="header"><!--REGIAO 1-->
		'.DATE	
		.'</div>';
	}

	function criaMenu () {
		return 
		'<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="usuario.html"></a>
                    </li>
                  <div class="search-bar">
                        <input type="text"  required></input>
                        <div class="search-icon"></div>
                  </div>

                  <div>
                      <div class="user">
                         <a href="login.php"><img src="assets\ico\8.png"</a>
                      </div>
                       <div class="car">
                          <img src="assets\ico\car.png">
                      </div>
                       <div class="ko"> 
                       <a href="index.php"><img src="assets\ico\ko-LOGO.png"></a></div>
                   </div>
                </ul>
            </div>
           



            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="usuario.php">Usuário</a>
                    </li>
                    <li>
                        <a href="produto.php">Produto</a>
                    </li>
                    <li>
                        <a href="contato.php">Contato</a>
                    </li>
					 <li>
                        <a href="links.php">Links de Interesse</a>
                    </li>
					 <li>
                        <a href="sobre.php">Sobre</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>';
	}

	function finalizaPagina () {
		return
		'<div class="container">

        <hr>
         <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

      <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/java.js"></script>
        <script src="js/jquery.js"></script>
        

</body>';
	}

?>