<?php

require_once('funcoes.php');
require_once('conexao.php');
if (!isset($_SESSION)) {
    echo"<script language='javascript' type='text/javascript'>alert('acesso Negado');window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>

	<?php 

	echo iniciaPagina();
	echo criaCabecalho();
	  if (isset($_SESSION)){
             echo criaMenu();
        }
        else {
            echo criaMenu2();
            echo "<p style= 'color :white;'>Olá usuario</p>";
            }
		?>
		<!-- <div class="conteudo"> -->
		<?php
			echo "Produto cadastrado com sucesso!<br>";

			echo "DADOS DO PRODUTO<br>";

			$nome_produto = $_POST["nome_produto"];//nome
			echo "Nome: ".$nome_produto."<br>";
			$preco_produto = $_POST["preco_produto"];//preço
			echo "Preço: R$ ".$preco_produto."<br>";

			$arquivo = $_FILES['arquivo'];//foto
			
			$arquivo2 = $_FILES['arquivo2'];//foto
			
			$arquivo3 = $_FILES['arquivo3'];//foto

			echo"<br>" ;
			print_r($_FILES)."<br>";
			echo"<br>" ;

		?>

		<a href="index.php">Clique aqui para voltar a página principal</a><!--link-->
		<!-- </div> -->
	<?php
	echo finalizaPagina();
	?>
</html>