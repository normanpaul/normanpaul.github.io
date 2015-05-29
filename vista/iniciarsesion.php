<?php
	session_start();
	session_destroy();
?>

<html>
<head>
	<meta charset = "UTF-8">
	<title>Programación Web</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css2/bootstrap.css">
    <link rel="stylesheet" href="css2/misestilos.css">
    <script src="js2/jquery.js"></script>
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
      <a class="navbar-brand" href="../index.html">PC VENTAS</a>
    </div>
     </div>
</nav>





<div class="container">
  <div class="row">
    <div class="col-xs-0 col-lg-2"></div>
    <div class="col-xs-12 col-lg-8">
      <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Iniciar Sesión</h3>
  </div>
  <div class="panel-body">
  	<div class = "login">
  	<form class="form-horizontal" action = "../controlador/login.php" method = "POST">
  <fieldset>
    
    <div class="form-group">
					<label class="col-lg-2 control-label">Usuario:</label>
					    <div class="col-lg-8">
						<input class="form-control" type = "text" name = "usuario" placeholder = "Usuario" title = "Se nesecita un usuario" required>
						</div>
  			 	 </div>

				<div class="form-group">
					<label class="col-lg-2 control-label">Contraseña:</label>
					    <div class="col-lg-8">
						<input class="form-control" type = "password" name = "password" placeholder = "Contraseña" title = "Se nesecita una contraseña" required>
						</div>
  			 	 </div>
  			 	 
  		<div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
  			 	 <input  class="btn btn-default" type = "reset" value = "Limpiar">
				   <input class="btn btn-primary" type = "submit" value = "Entrar">
           </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
				
				<a href = "Registro.php">
					<h3>Crear Cuenta</h3>
				</a>
    			</div>
      </div>
  
   
    
  </fieldset>
 </form>
  </div>
  </div>
</div>
    </div>
    <div class="col-xs-0 col-lg-2"></div>
  </div>
</div>
</body>
</html>