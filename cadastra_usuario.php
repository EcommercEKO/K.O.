<?php

require_once('funcoes.php');

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
		echo "Usuário cadatrado com sucesso!<br>";

		echo "SEUS DADOS CADRASTRAIS <br>";
		$nome = $_POST["nome"];//nome
		echo "Nome: ".$nome."<br>";

		$idade = $_POST["idade"];//idade
		echo "Idade: ".$idade."<br>";

		$cpf = $_POST["cpf"];//cpf
		echo "CPF: ".$cpf."<br>";

		$rg = $_POST["rg"];//rg
		echo "RG: ".$rg."<br>";

		$data = $_POST["data"];//data de nascimento
		echo "Data de Nascimento: ".$data."<br>";

		$sexo = $_POST["sexo"];//sexo
		echo "Sexo: ".$sexo."<br>";//tem que dar um jeito para mostrar se é masculino ou feminino.. só mostra on
		
		$estadocivil= $_POST["estado_civil"];//estado civil
		echo "Estado Civil: ".$estadocivil."<br>";

		$cep = $_POST["cep"];//cep
		echo "CEP: ".$cep."<br>";

		$endereco = $_POST["endereco"];//endereço
		echo "Endereço: ".$endereco."<br>";

		$numero = $_POST["numero"];//numero da casa
		echo "Número: ".$numero."<br>";

		$complemento = $_POST["complemento"];//complemento
		echo "Complemento: ".$complemento."<br>";

		$estado = $_POST["estado"];//Estado
		echo "Estado: ".$estado."<br>";

		$cidade = $_POST["cidade"];//cidade
		echo "Cidade: ".$cidade."<br>";

		$bairro = $_POST["bairro"];//bairro
		echo "Bairro: ".$bairro."<br>";


		$residencial = $_POST["residencial"];//telefone residencial
		echo "Tel. Residencial: ".$residencial."<br>";

		$celular = $_POST["celular"];//telefone celular
		echo "Tel. Celular: ".$celular."<br>";

		$email = $_POST["email"];//email
		echo "E-mail: ".$email."<br>";

		$senha = $_POST["senha"];//senha
		echo "Senha: ".$senha."<br>";//ta aparecendo a senha mesmo estando com o tipo password.

		?>

		<a href="index.php">Clique aqui para voltar a página principal</a><!--link-->
		</div>
	<?php
	echo finalizaPagina();
	?>
</html>