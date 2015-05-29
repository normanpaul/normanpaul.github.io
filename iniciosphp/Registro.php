<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Programación Web Productos</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/misestilos.css">
    <script src="js/jquery.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a align="right" class="navbar-brand" href="../index.html">PC VENTAS</a>
      
      <a class="navbar-brand" href="../new/productos.html">USAR DataTables</a>
    </div>

    
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-xs-0 col-lg-2"></div>
    <div class="col-xs-12 col-lg-8">
      <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Registro de Productos</h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" name="formRegistro" method="POST" action="guarda.php">
  <fieldset>
    <div class="form-group">
      <label for="inputId" class="col-lg-2 control-label">Id:</label>
      <div class="col-lg-4">
        <input class="form-control" id="inputId" placeholder="Id" type="text" name="id">
      </div>
    </div>
    <div class="form-group">
      <label for="inputProducto" class="col-lg-2 control-label">Producto:</label>
      <div class="col-lg-6">
        <input class="form-control" id="inputProducto" placeholder="Producto" type="text" name="producto">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPrecio" class="col-lg-2 control-label">Precio:</label>
      <div class="col-lg-4">
        <input class="form-control" id="inputPrecio" placeholder="Precio" type="text" name="precio">
      </div>
    </div>
    <div class="form-group">
      <label for="inputDescripcion" class="col-lg-2 control-label">Descripción:</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputDescripcion" placeholder="Descripción" type="text" name="descripcion">
      </div>
    </div>
    
    
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </fieldset>
</form>
  </div>
</div>
    </div>
    <div class="col-xs-0 col-lg-2"></div>
  </div>
</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>

