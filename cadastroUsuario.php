<?php 
require_once('funcoes.php');
?>
<!DOCTYPE html>
<html lang="en">

   <?php 
        echo iniciaPagina();
        echo criaMenu();
    ?>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
            <form action="cadastra_usuario.php" method="POST">
                     <div class="col-ms-4">
                       Nome: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="nome">
                       <br />
                       
                        Idade: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="idade" maxlength="3">
                        
                        <br />

                        CPF: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="cpf" maxlength="11">
                        <br />

                        RG:<input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="rg" maxlength="9">
                        <br />
                        
                        Data de Nascimento: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock"name="data" maxlength="10">
                        <br />
                        Feminino: <input type="radio" name="sexo" value="Feminino">
                        Masculino: <input type="radio" name="sexo" value="Masculino">
                        <br />
                        <br>
                        Estado Civil: <select class="form-control" type="text" name="estado_civil">
                            <option value= "solteiro"> 
                                Solteiro
                            </option>
                            <option value= "casado"> 
                                Casado
                            </option>
                            <option value= "separado"> 
                                Separado
                            </option>
                            <option value= "divorciado"> 
                                Divorciado
                            </option>
                            <option value= "viúvo">
                                Viúvo
                            </option>
                            
                        </select>
                        <br />
                        CEP: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="cep" maxlength="8">
                        <br />
                        Endereço: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="endereco">
                        <br />
                        Numero: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="numero">
                        <br />
                        Complemento: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="complemento">
                        <br />
                        Estado: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock"name="estado">
                        <br />
                        Cidade: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="cidade">
                        <br />
                        Bairro: <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="bairro">
                        <br />
                        Tel.Residencial:<input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="residencial">
                        <br />
                        Tel.Celular:<input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock"name="celular">
                        <br />
                        E-mail:<input type="email" class="form-control" id="inputEmail3"name="email">
                        <br />
                        Senha:<input type="password" class="form-control" id="inputPassword2" name="senha">
                        <br />
                        Não sou robo: <input type="checkbox" name="robozinho">
                        <input type="submit" class="btn btn-default" name="Enviar">
            </form>         
        </div>
    
    <?php
       echo finalizapagina();
    ?>
</html>
