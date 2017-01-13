<?php 
require_once('conexao.php');
 $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $user = user($login);
       if ($user == $login){
          echo"<script language='javascript' type='text/javascript'>alert('Bem vindo $user');window.location.href='index.php';</script>";
          setcookie("login",$login);
          session_start("user");
        }else{
         
           echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.php';</script>";
          die();
}
?>
