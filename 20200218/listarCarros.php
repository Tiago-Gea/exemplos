<?php
include "classCarro.php";
include "cabecalho.php";
?>
Objetos "Carro" Instaciados no sistema:

<?php
  foreach($_SESSION["carro"] as $c){
      echo "Cor:<span style='color:$c->cor'>$c->cor</span><br />
      Quantidades de Portas: $c->qtd_porta <br />
      Velocidade Maxima: $c->velocidade_maxima <br />
      Velocidade Atual: $c->velocidade_atual
      <hr />";
  }
?>