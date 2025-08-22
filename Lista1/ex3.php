<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container">
<h1></h1>
<form method="post">
<div class="mb-3">
              <label for="x" class="form-label">Digite um valor: </label>
              <input type="number" id="x" name="x" class="form-control">
            </div><div class="mb-3">
              <label for="y" class="form-label">Digite outro valor: </label>
              <input type="number" id="y" name="y" class="form-control">
            </div>
<button type="submit" class="btn btn-primary">Enviar</button>

</form>

  <?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $x = $_POST['x'];
    $y = $_POST['y'];
    $multiply = $x * $y;
    
    echo "<p> O valor $x multiplicado com $y dá: $multiply</p>";
  }
  ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>