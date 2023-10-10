
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registra Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <form method='POST'>
   {!! csrf_field() !!}
    <div class="container">
      <div class="col-6">
        <label for="codi_prod" class="form-label">Código Producto</label>
        <input type="text" class="form-control" id="codi_prod" name="codi_prod" placeholder="Código Producto" required>
      </div>
      <div class="col-6">
        <label for="nomb_prod" class="form-label">Nombre Producto</label>
        <input type="text" class="form-control" id="nomb_prod"  name="nomb_prod" placeholder="Nombre Producto">
      </div>
      <div class="col-6">
        <label for="desc_prod" class="form-label">Descripción Producto</label>
        <textarea class="form-control" id="desc_prod" name="desc_prod" rows="3"></textarea>
      </div>
      <div class="col-6">
        <label for="prec_prod" class="form-label">Precio Producto</label>
        <input type="number" class="form-control" id="prec_prod" name="prec_prod" placeholder="Precio Producto">
      </div>
      <br>
      <div class="col-6">
        <button  class="btn btn-success" type='submit'>Guardar</button>
      </div>
      @if (isset($status) && $status['code']=='200')
        <div class="col-6">
          <div class="alert alert-success" role="alert">
            {{ $status['menssage']}}
          </div>
        </div>  
      @endif
      @if (isset($status) && $status['code']=='101')
        <div class="col-6">
          <div class="alert alert-warning" role="alert">
            {{ $status['menssage']}}
          </div>
        </div>  
      @endif
      
    </div>
     
  </form>
  </body>
</html>