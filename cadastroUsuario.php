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
    <div class="container">
        <h1>Cadastro de Usuário</h1>
            <form action="cadastra_usuario.php" method="POST">
                     <div class="col-ms-4">
                       <p id="pcontato">Nome:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="nome">
                       <br />
                       
                        <p id="pcontato">Idade:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="idade" maxlength="3">
                        
                        <br />

                        <p id="pcontato">CPF:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="cpf" maxlength="11">
                        <br />

                        <p id="pcontato">RG:</p><input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="rg" maxlength="9">
                        <br />
                        
                        <p id="pcontato">Data de Nascimento:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock"name="data" maxlength="10">
                        <br />
                        <div class="sexo">
                        <table>
                        <tr >
                        <td><p >Feminino <input type="radio" name="sexo" value="Feminino"> </p></td>
                        <td><p>&nbsp;Masculino <input type="radio" name="sexo" value="Masculino"></p></td>
                        </tr>
                        </table>
                        </div>
                        <br />
                        <br>
                        <p id="pcontato">Estado Civil:</p> <select class="form-control" type="text" name="estado_civil">
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
                        <p id="pcontato">CEP:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="cep" maxlength="8">
                        <br />
                        <p id="pcontato">Endereço:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="endereco">
                        <br />
                        <p id="pcontato">Numero:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="numero">
                        <br />
                        <p id="pcontato">Complemento:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="complemento">
                        <br />
                        <p id="pcontato">Estado:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock"name="estado">
                        <br />
                        <p id="pcontato">Cidade:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="cidade">
                        <br />
                        <p id="pcontato">Bairro:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="bairro">
                        <br />
                        <p id="pcontato">Tel.Residencial:</p><input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="residencial">
                        <br />
                        <p id="pcontato">Tel.Celular:</p><input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock"name="celular">
                        <br />
                        <p id="pcontato">E-mail:</p><input type="email" class="form-control" id="inputEmail3"name="email">
                        <br />
                        <p id="pcontato">Senha:</p><input type="password" class="form-control" id="inputPassword2" name="senha">
                        <br />
                        <p id="pcontato">Não sou robo:</p> <input type="checkbox" name="robozinho">
                        <input type="submit" class="btn btn-default" name="Enviar">
            </form>         
        </div>
    
    <?php
       echo finalizapagina();
    ?>
</html>
