<?php

include("cabecalho.php");


echo "<p>página da Estrutura 4</p>";
echo "<p>Utilizando <strong>while</strong></p>";

    $i = 1;
while($i <= 5){
    echo "<p>Número $i</p>";
    $i++;
}


/*
    $contador = 0;
    while($contador <= 3){
        echo "<p>Contador está em $contador</p>";
        $contador++;
    }
*/
include("rodape.php");
