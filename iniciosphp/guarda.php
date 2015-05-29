<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Clase de Programación Web</title>
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
      <a class="navbar-brand" href="../index.html">Prog. Web</a>
    </div>

    
</nav>

<div class="container">
  <div class="row">
    <div class="col-xs-0 col-lg-2"></div>
    <div class="col-xs-12 col-lg-8">
      <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Registro de Alumnos</h3>
  </div>
  <div class="panel-body">
    <form class="form-horizontal" name="formRegistro" method="POST" action="guarda.php">
  <fieldset>
    <div class="form-group">
      <label for="inputId" class="col-lg-2 control-label">Id:</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputId" placeholder="Id" type="text" name="id">
      </div>
    </div>
    <div class="form-group">
      <label for="inputProducto" class="col-lg-2 control-label">Producto:</label>
      <div class="col-lg-2">
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
        <input class="form-control" id="inputDescripcion" placeholder="Descripcion" type="text" name="descripcion">
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

<!--empieza php-->
  
  <?php 
     
     //conexion a la base de datos
  $con=new mysqli('localhost','root', '', 'catalogo');
  //verificar la conexion
  if($con->connect_error){
    die("Conexion fallida". $con->connect_error);
  }

  $id=$_POST["id"];
  $producto=$_POST["producto"];
  $precio=$_POST["precio"];
  $descripcion=$_POST["descripcion"];
  

  $sql="INSERT INTO productos (id,producto,precio,descripcion) VALUES ($id,'$producto', $precio,'$descripcion')";

  //pregunta: si la en la conexion se hizo la consulta correcta
  if($con->query($sql)===TRUE){

    ?>  
    <!--esto lo saque del tema de bootswatch que elegi en indicador de alerta-->
    <div class="alert alert-dismissible alert-success">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <strong>El Producto se dio de alta correctamente!</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>.
    </div>
    <?php
  }

  else {
    ?>
    <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Error en registrar producto!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
</div>
    <?php
  }



  ?>

  </div>
</div>
    </div>
    <div class="col-xs-0 col-lg-2"></div>
  </div>
</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>

