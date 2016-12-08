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
