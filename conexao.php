

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

function nomeProd($id){
	$mysqli= conexao();
	$sqlNOME = "SELECT NOME FROM produto where PRODUTO_IMAGEM_ID = '$id'";
	// Executa a consulta OU mostra uma mensagem de erro
	$resultadoNOME = $mysqli -> query($sqlNOME);
	// Faz um loop, passando por todos os resultados encontrados
	$dadosNOME = $resultadoNOME->fetch_array(MYSQLI_ASSOC);
	  // Exibe a notícia dentro de um bloco HTML
	return "$dadosNOME[NOME]";
}

function preco($id){
	$mysqli= conexao();
	$sqlPRECO = "SELECT PRECO FROM produto where PRODUTO_IMAGEM_ID = '$id'";
	// Executa a consulta OU mostra uma mensagem de erro
	$resultadoPRECO = $mysqli -> query($sqlPRECO);
	// Faz um loop, passando por todos os resultados encontrados
	$dadosPRECO = $resultadoPRECO->fetch_array(MYSQLI_ASSOC);
	  // Exibe a notícia dentro de um bloco HTML
	return "$dadosPRECO[PRECO]";
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


function nomecliente($id){
	$mysqli= conexao();
	$sql = "SELECT NOME FROM cliente WHERE CLIENTE_ID = '$id'";
	// Executa a consulta OU mostra uma mensagem de erro
	$resultado = $mysqli -> query($sql);
	// Faz um loop, passando por todos os resultados encontrados
	$dados = $resultado->fetch_array(MYSQLI_ASSOC);
	  // Exibe a notícia dentro de um bloco HTML
	return "$dados[NOME]";
}
function user($user){
	
	$mysqli= conexao();
	$sql = "SELECT login FROM cliente WHERE login like '$user'";
	// Executa a consulta OU mostra uma mensagem de erro
	$resultado = $mysqli -> query($sql);
	// Faz um loop, passando por todos os resultados encontrados
	$dados = $resultado->fetch_array(MYSQLI_ASSOC);
	  // Exibe a notícia dentro de um bloco HTML;
	return "$dados[login] ";
}
function senha($user){
	
	$mysqli= conexao();
	$sql = "SELECT senha FROM cliente WHERE login like '$user'";
	// Executa a consulta OU mostra uma mensagem de erro
	$resultado = $mysqli -> query($sql);
	// Faz um loop, passando por todos os resultados encontrados
	$dados = $resultado->fetch_array(MYSQLI_ASSOC);
	  // Exibe a notícia dentro de um bloco HTML;
	return "$dados[senha]";
}
<<<<<<< HEAD
=======




>>>>>>> 21ff125e080dcf5b911b9300b4ae0603d5a89787
?>

