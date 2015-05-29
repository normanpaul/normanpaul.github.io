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
      <a class="navbar-brand" href="index.html">PC VENTAS</a>
    </div>
     </div>
</nav>




<section id= "formulario">
	<center>
			<h1>Iniciar Sesión<h1>
			<br><br>
			<div class = "login">
			<form action = "../controlador/login_copia.php" method = "POST">

			<fieldset>
				<legend>Login</legend>

				<p>
						<input type = "text" name = "usuario" placeholder = "Usuario" title = "Se nesecita un usuario" required>
				</p>

				<p>
						<input type = "password" name = "password" placeholder = "Contraseña" title = "Se nesecita una contraseña" required>
				</p>
				<p>
						<input type = "submit" value = "Entrar">
						<input type = "reset" value ="Limpiar">
				</p>

				<p>
				<a href = "crear.html">
					Crear Cuenta
				</a>
				</p>



			</fieldset>
			</form>
			</div>


	</center>
</section>
</body>
</html>