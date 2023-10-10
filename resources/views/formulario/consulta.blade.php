
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registra Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <form method="GET" action="/consultaProducto">
   
    <div class="container">
      <div class="col-6">
        <label  class="form-label">Código Producto</label>
        <input type="text" class="form-control" name="codi_prod" placeholder="Código Producto" required>
      </div>
      <br>
      <div class="col-6">
        <button  class="btn btn-success" type='submit'>Consultar</button>
      </div>

    </div>
     
  </form>
  </body>
</html>