<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primera aplicación</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"></link>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<form method="POST" action="registrar.php">
  <div class="mb-3">
    <label for="Identificador" class="form-label">Identificador</label>
    <input type="text" class="form-control" id="Identificador" name="Identificador">
  </div>
  <div class="mb-3">
    <label for="Nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre">
  </div>
  <div class="mb-3">
    <label for="Detalle" class="form-label">Detalle</label>
    <input type="text" class="form-control" id="Detalle" name="Detalle">
  </div>

  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</body>
</html>