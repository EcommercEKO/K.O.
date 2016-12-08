<?php 
require_once('funcoes.php');
require_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">

   <?php 
<<<<<<< HEAD
        echo iniciaPagina();
            if (isset($_SESSION)){
            echo criaMenu();
=======
         echo iniciaPagina();
                   if (isset($_SESSION)){
             echo criaMenu();
>>>>>>> 21ff125e080dcf5b911b9300b4ae0603d5a89787
        }
        else {
            echo criaMenu2();
            echo "<p style= 'color :white;'>Olá usuario</p>";
            }
    ?>

    <!-- Page Content -->
    <div class="container">
			<div class="links">
				<p id="paglink">Conheça mais sobre as ultimas novidades do mundo da tecnologia:</p>
				
                <?php
                $size = sizeof($link);
                for ($i=0; $i < $size ; $i++) {
                    echo "<a href=".$link[$i][0]." target='_blank'><img src=".$link[$i][1]."></a>";
                }
                ?>
            </div>
    </div>
    <!-- /.container -->

    <?php
       echo finalizapagina();
    ?>

</html>
