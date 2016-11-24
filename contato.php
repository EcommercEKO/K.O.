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
    <h3 id="titulo">Contato</h3>
    <form action="envia_contato.php" method="post" id = "formContato" enctype="multipart/form-data">
       <div class="col-ms-4">

        <p id="pcontato">Nome:</p><input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="nome_contato">
        <br />
        <p id="pcontato">E-mail:</p><input type="email" class="form-control" id="inputEmail3" name="email_contato">
        <br />
        <p id="pcontato">Telefone: </p>
        <input type="text" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock" name="telefone_contato" maxlength="9">
        <br />
        Assunto: 
    <select class="form-control"name="assunto_contato">
        <option value="Reclamações">Reclamações</option>        
        <option value="Dúvidas">Dúvidas</option>        
        <option value="Sugestões">Sugestões</option>        
        <option value="Outros">Outros</option>      
    </select>
    <br />
    <p id="pcontato">Preferência para retorno do contato:</p>
    <br /><br>
    
    <input  type="checkbox" name="preferencia[]" value="telefone"><a id="checkbox">Telefone</a>
    <input id="checkbox" type="checkbox" name="preferencia[]" value="e-mail"><a id="checkbox">E-mail</a>
    
    <br /><br>
    <p id="pcontato">Mensagem: <br /></p>
    <textarea class="form-control" rows="3" name="mensagem" ></textarea>
    <br />
    <br/>
    <input type="submit" class="btn btn-default" name="Enviar">




</div>

<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <p></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
    <?php
       echo finalizapagina();
    ?>

</html>
