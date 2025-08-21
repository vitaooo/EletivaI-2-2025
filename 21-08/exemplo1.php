<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP zão</title>
</head>
<body>
    <?php 
    // date(d)
    $dia = date("d");

    echo "<p>  $dia  </p>";

    ?>

    <h1> Hoje é dia <?= $dia ?> de Agosto de 2025</h1>
        <form method="post" >
            <div class="mb-3">
              <label for="numberx" class="form-label">Informe o valor de x:</label>
              <input type="number" id="numberx" name="numberx" class="form-control">
            </div>

            <div class="mb-3">
              <label for="numbery" class="form-label">Informe o valor de y:</label>
              <input type="number" id="numbery" name="numbery" class="form-control">
            </div>

     <button type="submit" class="btn btn-primary">Enviar</button>

        </form>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $x = $_POST['numberx'];
    $y = $_POST['numbery'];
    $soma = $x + $y;
    echo "<p> A soma de $x e $y é $soma </p>";
    }

    // - + * **elevado / divisão // divisão sem resto %
?>
    
</body>
</html>