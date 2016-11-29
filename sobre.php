<?php 
require_once('funcoes.php');
require_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">

   <?php 
        echo iniciaPagina();
        echo criaMenu();
    ?>

    <!-- Page Content -->
    <div class="container">

        <h2 id="titulo-sobre">SOBRE A KNOCKOUT</h2>

	     <p id="textoinfo">A <i>Knockout(K.O)</i> é um E-Comerce inovador,que surgiu de um trabalho de graduação, onde quatro desenvolvedores se juntaram com uma proposta, nunca vista antes em outro E-Commerce,com  um layout inovador, com um design funcional inspirado nos quadrinhos, alem disso a K.O possui o melhor sistema de segurança para proteção do seus dados e de suas compras. Trabalhamos  duro para conseguir trazer o que há de melhor no mercado para vocês,aproveitem o que  universo K.O tem a te oferecer</p><br>
   
	<!--texto informativo sobre o sistema utilizar diferentes tipos de h-->
	<table class="table table-striped">
	  	<caption><h2 id="dev">Desenvolvedores</h2></caption>
   		<tr>
   	   		<th > Nome dos Desenvolvedores </th>
			<th> RA </th>
  		</tr>
	   	<tr>
	   		<td class="ce">Lucelly Bezerra dos Santos </td>
	   		<td class="cd"> 1600623 </td>
    	</tr>
    	<tr>
    		<td class="ce">Mauricio de Albuquerque da Silva &nbsp; </td>
    		<td  class="cd">1600815 </td>
       	</tr>
	   	<tr>
  			<td class="ce">Thales Levi Canete </td>
  			<td class="cd">1600428 </td>
   		</tr>
   		<tr>
	   		<td class="ce">Yago Matos Januário </td>
	    	<td class="cd">1600106 </td>
		</tr>
	</table>
	<br/><br/><br/><br/><br/><br/><br/>					

    </div>
    <!-- /.container -->

    <?php
       echo finalizapagina();
    ?>

</html>
