<?php

include("cabecalho.php");


echo "<p>página da Estrutura 5</p>";
echo "<p>Utilizando <strong>do while</strong></p>";

    $i = 1;

    do {
        echo "<p>Número $i</p>";
        $i++;
    } while ($i <= 3);

include("rodape.php");
