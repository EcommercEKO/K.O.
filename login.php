<?php 
require_once('funcoes.php');
require_once('conexao.php');

?>
<!DOCTYPE html>
<html lang="en">

   <?php 
       echo iniciaPagina();
      if (isset($_SESSION)){
             echo criaMenu();
        }
        else {
            echo criaMenu2();
            echo "<p style='color :white;'>Olá usuario</p>";
            }
    ?>

    <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                          <div class="ko-login">
                            <img src="assets\ico\ko-LOGO.png">"
                           </div>
                            <div class="description">
                            	
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box1">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Login</h3>
                            		<p>Entre com o seu nome de Usuário e Senha:</p>

                                    <a id="login-cadastro" href="cadastroUsuario.php">Ainda não é cadastrado? Cadastre-se agora!</a>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="login2.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Nome de Usuário</label>
			                        	<input type="text"  placeholder="Nome de Usuário" name="login" id="login"  class="form-username form-control">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Senha</label>
			                        	<input type="password" name="senha" placeholder="Senha" class="form-password form-control" id="senha">
			                        </div>
			                        <button type="submit" class="btn" name="entrar" id="entrar">Entrar!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>





 	<?php
       echo finalizapagina();
    ?>

</html>