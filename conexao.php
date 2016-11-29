

<?php
function conexao(){
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'tecweb';
	// Conecta-se ao banco de dados MySQL
	$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

	// Caso algo tenha dado errado, exibe uma mensagem de erro
	return $mysqli;
}


function imagem($id){
	$mysqli= conexao();
	$sqlIMAGEN = "SELECT URL FROM produto_imagem where IMAGEM_ID = '$id'";
	// Executa a consulta OU mostra uma mensagem de erro
	$resultadoIMAGEN = $mysqli -> query($sqlIMAGEN);
	// Faz um loop, passando por todos os resultados encontrados
	$dadosIMAGEN = $resultadoIMAGEN->fetch_array(MYSQLI_ASSOC);
	  // Exibe a notícia dentro de um bloco HTML
	return "$dadosIMAGEN[URL]";
}

function descri($id){
	$mysqli= conexao();
	$sql = "SELECT DESCRICAO FROM produto WHERE PRODUTO_ID = '$id'";
	// Executa a consulta OU mostra uma mensagem de erro
	$resultado = $mysqli -> query($sql);
	// Faz um loop, passando por todos os resultados encontrados
	$dados = $resultado->fetch_array(MYSQLI_ASSOC);
	  // Exibe a notícia dentro de um bloco HTML
	return "$dados[DESCRICAO]";
}

?>

