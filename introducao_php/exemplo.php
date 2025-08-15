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
        <form method="post" action="FormularioResp.php">
            <div class="mb-3">
              <label for="nome" class="form-label">Informe o seu nome:</label>
              <input type="text" id="nome" name="nome" class="form-control">
            </div>

            <div class="mb-3">
              <label for="nome" class="form-label">Informe o seu nome:</label>
              <input type="text" id="nome" name="nome" class="form-control">
            </div>
     <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    
</body>
</html>