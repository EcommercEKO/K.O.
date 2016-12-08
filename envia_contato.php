<?php
// if (!empty($_POST)) {
// 	$retorno = array("status" => "Y");
// 	exit(json_encode($retorno));

// } else {
// 	$retorno = array("status" => "N");
// 	exit(json_encode($retorno));
	
// }
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
	echo criaMenu();
		?>
		<div class="content">
		<?php 
			$nome_contato = $_POST["nome_contato"];
			$email_contato = $_POST["email_contato"];
			//$preferencia = $_POST["preferencia"];
			$telefone_contato = $_POST["telefone_contato"];


			if(isset($_POST["preferencia"])){
				$cont=0;
				foreach ($_POST["preferencia"] as $preferencias) {
					$cont++;
				}
				if ($cont>1) {
					echo $nome_contato.",seu contato foi recebido, aguarde nosso contato através do Telefone: ".$telefone_contato." ou através do E-mail: ".$email_contato."<br>";
				}elseif ($preferencias == "telefone") {
					echo $nome_contato.", seu contato foi recebido, aguarde nosso contato através do Telefone: ".$telefone_contato."<br>";
				}elseif ($preferencias == "e-mail") {
					echo $nome_contato.", seu contato foi recebido, aguarde nosso contato através do E-mail: ".$email_contato."<br>";
				}
			}else{
				echo "Você não escolheu nenhuma preferencia de contato! ";
			}
			?>
		<br />
		<a href="index.php">Clique aqui para voltar a página principal</a>
		</div>
	<?php
	echo finalizaPagina();
	?>
</html>