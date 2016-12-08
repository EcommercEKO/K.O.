<?php 
require_once('conexao.php');
 $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $user = user($login);

          if ($user = $login){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
}
?>
