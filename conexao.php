

<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'tecweb';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

// Caso algo tenha dado errado, exibe uma mensagem de erro

?>
<?php/*
$sql = "SELECT * FROM produto ";
// Executa a consulta OU mostra uma mensagem de erro
$resultado = $mysqli -> query($sql);
// Faz um loop, passando por todos os resultados encontrados
while ($dados = $resultado->fetch_array(MYSQLI_ASSOC)) {
  // Exibe a notícia dentro de um bloco HTML
	echo "<h1>$dados[NOME]<BR>";


}

$sqlIMAGEN = "SELECT URL FROM produto_imagem where PRODUTO_ID = 1 ";
// Executa a consulta OU mostra uma mensagem de erro
$resultadoIMAGEN = $mysqli -> query($sqlIMAGEN);
// Faz um loop, passando por todos os resultados encontrados
$dadosIMAGEN = $resultadoIMAGEN->fetch_array(MYSQLI_ASSOC);
  // Exibe a notícia dentro de um bloco HTML
	echo "<h2><img src='$dadosIMAGEN[URL]'><BR>";

*/
?>

