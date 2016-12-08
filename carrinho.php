<<<<<<< HEAD
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

     <?php
        session_start();


        $id_prod = $_POST['valor'];


        $key = array($id_prod);

        for($i = 0; $i<sizeof($key); $i++){
            $id = $key[$i];
        }
      ?>
     
    <div class="container">
          
                    
            <h3 id="tcar">Carrinho de compra</h3>
            <form class="carrinho">
                <p class="ccar">Produto(s):</p>

                <?
                    $key_carrinho = array_keys($_SESSION[carrinho])

                    for($i = 0; $i<sizeof($key); $i++){
                        $id = $key[$i];

                ?>

                <tr>
                <td height="25"><font face='Arial' size='2'><? echo $_SESSION[carrinho][$id][nomeProd("$id_prod")]; ?></font></td>
                <td height="25"><font face='Arial' size='2'>R$ <? echo $_SESSION[carrinho][$id][preco("$id_prod")]; ?></font></td>
                </tr>

                <? 
                }
                ?>


                
                <br>
                <br>
                <label>Total</label><input type="text" name="total">

            </form>          
                        
        </div>

        <?php
            echo finalizapagina();
        ?>

</html>
=======
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

     <?php
        session_start();


        $id_prod = $_POST['valor'];


        $key = array($id_prod);

        for($i = 0; $i<sizeof($key); $i++){
            $id = $key[$i];
        }
      ?>
     
    <div class="container">
          
                    
            <h3 id="tcar">Carrinho de compra</h3>
            <form class="carrinho">
                <p class="ccar">Produto(s):</p>

                <?
                    $key_carrinho = array_keys($_SESSION[carrinho])

                    for($i = 0; $i<sizeof($key); $i++){
                        $id = $key[$i];

                ?>

                <tr>
                <td height="25"><font face='Arial' size='2'><? echo $_SESSION[carrinho][$id][nomeProd("$id_prod")]; ?></font></td>
                <td height="25"><font face='Arial' size='2'>R$ <? echo $_SESSION[carrinho][$id][preco("$id_prod")]; ?></font></td>
                </tr>

                <? 
                }
                ?>


                
                <br>
                <br>
                <label>Total</label><input type="text" name="total">

            </form>          
                        
        </div>

        <?php
            echo finalizapagina();
        ?>

</html>
>>>>>>> 21ff125e080dcf5b911b9300b4ae0603d5a89787
