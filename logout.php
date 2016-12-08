<?php 
session_destroy();
unset($_SESSION['nome']);
unset($_SESSION['login']);
unset($_SESSION['senha']);
header(location: 'index.php');
?>