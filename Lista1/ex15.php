<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1></h1>
        <form method="post">

            <div class="mb-3">
                <label for="peso" class="form-label">Digite seu peso em quilos: </label>
                <input type="number" id="peso" name="peso" class="form-control">
            </div>

            <div class="mb-3">
                <label for="altura" class="form-label">Digite sua altura em metros: </label>
                <input type="number" id="altura" name="altura" class="form-control" step="0.01">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $peso = $_POST['peso'];
            $altura = $_POST['altura'];


            $altura_float = floatval($altura);

            $imc = $peso / ($altura_float ** 2);

            echo "<p> Seu IMC é $imc </p>";

        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"></script>
    </div>
</body>

</html>