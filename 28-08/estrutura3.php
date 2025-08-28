<?php

include("cabecalho.php");


echo "<p>página da Estrutura 3</p>";
echo "<p>Utilizando <strong>Switch</strong></p>";

$diaSemana = 4;

switch ($diaSemana) {
    case 1:
        echo "Hoje é domingo";
        break;
    case 2:
        echo "Hoje é segunda";
        break;
    case 3:
        echo "Hoje é terça";
        break;
        default:
            echo "<p>Hoje pode ser quarta, quinta, sexta ou sábado!</p>";
            break;
}


/*
$valor = 1;

switch ($valor){
    case $valor > 10:
        echo "<p> Valor é maior que 10 </p>";
        break;
    case $valor < 10:
        echo "<p> Valor é menor  que 10</p>";
        break;
    case $valor == 10:
        echo "Valor é igual a 10";
        break;
    }
*/
include("rodape.php");
