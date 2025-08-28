<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ex20</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1></h1>
        <form method="post">

            <div class="mb-3">
                <label for="distancia" class="form-label">Digite a distância percorrida: (em metros)</label>
                <input type="number" id="distancia" name="distancia" class="form-control">
            </div>

            <div class="mb-3">
                <label for="tempo" class="form-label">Digite o tempo que demorou: (em minutos)</label>
                <input type="number" id="tempo" name="tempo" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $distancia = $_POST['distancia'];
            $tempo = $_POST['tempo'];

            $velocidadeMedia = $distancia / $tempo;

            echo "<p> A velocidade média foi de: $velocidadeMedia m/s</p>";
        }

        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"></script>
    </div>
</body>

</html>