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
            echo "<p style= 'color :white;'>Olá usuario</p>";
            }
    ?>
    <div class="container ">
        <h1 id="pcadastroUser">Cadastro de Usuário</h1>
        <div class="form-b">
            <form action="cadastra_usuario.php" role="form" method="POST" class="login-form" >
                     <div class="col-ms-4">
                       <p class ="pcontato" for=nome name="nome">Nome:</p>

                        <input type="text" id="inputHelpBlock nome" class=" form-control " name="nome" >
                       <br />
                       
                        <p class="pcontato" name="idade">Idade:</p> <input type="text" id="inputHelpBlock" class="form-control " aria-describedby="helpBlock" name="idade" maxlength="3">
                        
                        <br />

                        <p class="pcontato" name="cpf">CPF:</p> <input type="text" id="inputHelpBlock" class="form-control " aria-describedby="helpBlock" name="cpf" maxlength="11">
                        <br />

                        <p class="pcontato">RG:</p><input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="rg" maxlength="9">
                        <br />
                        
                        <p class="pcontato">Data de Nascimento:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="data" maxlength="10">
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
                        <p class="pcontato">Estado Civil:</p> <select class="form-control" type="text" name="estado_civil">
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
                        <p class="pcontato">CEP:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="cep" maxlength="8">
                        <br />
                        <p class="pcontato">Endereço:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="endereco">
                        <br />
                        <p class="pcontato">Numero:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="numero">
                        <br />
                        <p class="pcontato">Complemento:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="complemento">
                        <br />
                        <p class="pcontato">Estado:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="estado">
                        <br />
                        <p class="pcontato">Cidade:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="cidade">
                        <br />
                        <p class="pcontato">Bairro:</p> <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="bairro">
                        <br />
                        <p class="pcontato">Tel.Residencial:</p><input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="residencial">
                        <br />
                        <p class="pcontato">Tel.Celular:</p><input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="celular">
                        <br />
                        <p class="pcontato">E-mail:</p><input type="email" class="form-control" id="inputEmail3" name="email">
                        <br />
                        <p class="pcontato">Senha:</p><input type="password" class="form-control" id="inputPassword2">
                        <br />
                        <p class="pcontato">Não sou robo:</p> <input type="checkbox" name="robozinho">
                        <button type="submit" class="btn" name="Enviar">Cadastrar</button>
                        
            </form>         
            </div>
        </div>
    
    <?php
       echo finalizapagina();
    ?>
</html>
