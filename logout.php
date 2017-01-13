<?php 
@session_destroy("user");
   echo"<script language='javascript' type='text/javascript'>alert('Sessão terminada');window.location.href='index.php';</script>";


?>