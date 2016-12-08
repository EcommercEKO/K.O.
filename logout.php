<?php 

if(isset($_SESSION));{


	@session_destroy();};

echo "<script language='javascript' type='text/javascript'>window.location.href='index.php';</script>";
?>