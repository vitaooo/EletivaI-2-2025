<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1></h1>
        <form method="post">

            <div class="mb-3">
                <label for="capital" class="form-label">Digite o capital inicial: </label>
                <input type="number" id="capital" name="capital" class="form-control">
            </div>

            <div class="mb-3">
                <label for="taxa" class="form-label">Digite a taxa do produto: </label>
                <input type="number" id="taxa" name="taxa" class="form-control" step="0.01">
            </div>

            <div class="mb-3">
                <label for="periodo" class="form-label">Digite o período de tempo: </label>
                <input type="number" id="periodo" name="periodo" class="form-control" step="0.01">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $capital = floatval($_POST['capital']);
            $taxa = $_POST['taxa'];
            $periodo = $_POST['periodo'];

            $resultado = $capital + (($capital *($taxa /100)) * $periodo);

            echo "<p> Valor líquido final é $resultado";

        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"></script>
    </div>
</body>

</html>