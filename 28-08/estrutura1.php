<?php

  include("cabecalho.php");

  echo "<p>página da Estrutura 1</p>";
  echo "<p>Utilizando <strong>if</strong></p>";

$valor = 19;
// operadores relacionais
// >  < >=  <=  !=  ==  ===
// &&-and ||-or !-not
if (($valor > 20) && ($valor < 30)) {
  echo "Valor maior que 20!";
} else {
  echo "Valor menor ou igual a 20!";
}


 include("rodape.php");