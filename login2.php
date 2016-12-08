<?php 
require_once('conexao.php');
 $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $user = user($login);
  $pass = senha($login);

 //echo $login;
 //echo user();

 if ($login == $user || $senha == $pass) {
 	session_start();
	$_SESSION['name'] = $user;
   	header('Localização: index.php');
 	echo "<script language='javascript' type='text/javascript'>alert('BEM VINDO $user ');window.location.href='index.php';</script>";
 }
 else{
 	echo "<script language='javascript' type='text/javascript'>alert('Senha ou usuário errados');window.location.href='index.php';</script>";


 }
 ?>