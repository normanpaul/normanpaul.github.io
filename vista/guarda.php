<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Registro Usuario</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css2/bootstrap.css">
    <link rel="stylesheet" href="css2/misestilos.css">
    <script src="../jquery.js"></script>
</head>
<body>


<div class="container">
  <div class="row">
    <div class="col-xs-0 col-lg-2"></div>
    <div class="col-xs-12 col-lg-8">
      <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Registro de Usuarios</h3>
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
      <label for="inputNombre" class="col-lg-2 control-label">Nombre:</label>
      <div class="col-lg-6">
        <input class="form-control" id="inputNombre" placeholder="Nombre" type="text" name="nombre">
      </div>
    </div>
    <div class="form-group">
      <label for="inputApellido" class="col-lg-2 control-label">Apellido:</label>
      <div class="col-lg-4">
        <input class="form-control" id="inputApellido" placeholder="Apellido" type="text" name="apellido">
      </div>
    </div>
    <div class="form-group">
      <label for="inputUsuario" class="col-lg-2 control-label">Usuario:</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputUsuario" placeholder="Usuario" type="text" name="usuario">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password:</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" placeholder="Password" type="text" name="password">
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
    <div>
        <a href = "iniciarsesion.php">
          <h3>Iniciar Sesión</h3>
        </a>
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
  $nombre=$_POST["nombre"];
  $apellido=$_POST["apellido"];
  $usuario=$_POST["usuario"];
  $password=$_POST["password"];
  

  $sql="INSERT INTO usuarios (id,nombre,apellido,usuario,password) VALUES ($id,'$nombre', '$apellido','$usuario','$password')";

  //pregunta: si la en la conexion se hizo la consulta correcta
  if($con->query($sql)===TRUE){

    ?>  
    <!--esto lo saque del tema de bootswatch que elegi en indicador de alerta-->
    <div class="alert alert-dismissible alert-success">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <strong>El usuario se dio de alta correctamente!</strong>
    </div>
    <?php
  }

  else {
    ?>
    <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Error en registrar Usuario!</strong> 
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

