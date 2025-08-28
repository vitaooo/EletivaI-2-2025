<?php

  include("cabecalho.php");


    echo "<p>página da Estrutura 2</p>";
    echo "<p>Utilizando <strong>Else if</strong></p>";

$valor = 20;

if ($valor > 20) {
  echo "<p>Valor maior que 20!</p>";
} else if ($valor < 20){
  echo "<p>Valor menor que 20!</p>";
} else {
  echo "<p>Valor é igual a 20!</p>";
}

 include("rodape.php");