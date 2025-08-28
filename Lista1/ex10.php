<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EX10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1></h1>
        <form method="post">

            <div class="mb-3">
                <label for="lT" class="form-label">Digite a largura do retângulo: </label>
                <input type="number" id="lT" name="lT" class="form-control">
            </div>

            <div class="mb-3">
                <label for="aT" class="form-label">Digite a altura do retângulo: </label>
                <input type="number" id="aT" name="aT" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $lt = $_POST['lT'];
            $at = $_POST['aT'];

            $perimetroRetangulo = 2 * ($lt + $at);

            echo "<p> O perímetro do retâgulo é $perimetroRetangulo</p>";

        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"></script>
    </div>
</body>

</html>