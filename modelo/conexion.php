<?php

class conexion{

	private $conexion; 
	private $server = "localhost"; 
	private $usuario = "root"; 
	private $pass = "";
	private $db = "catalogo"; 
	private $user ; 
	private $password;


	public function __construct(){

		$this->conexion = new mysqli($this->server, $this->usuario, $this->pass, $this->db);

		if($this->conexion->connect_errno){

			die("Fallo al tratar de conectar con MySQL: (". $this->conexion->connect_errno.")");


		}
	}

	public function cerrar(){

		$this->conexion->close();

	}


	public function login($usuario, $pass){

		$this->user = $usuario;
		$this->password = $pass;

		$query = "select id, nombre, apellido, usuario, password from usuarios where usuario = '".$this->user."' and password = '".$this->password."'";

		$consulta = $this->conexion->query($query);


		if($row = mysqli_fetch_array($consulta)){

			session_start();

			$_session['id'] = $row['id'];
			$_session['nom'] = $row['nombre'];
			$_session['ape'] = $row['apellido'];
			$_session['password'] = $row['password'];



			echo "usuario correcto"; 
			echo '<a href="http://www.yahoo.com">Ve a Yahoo.</a>';



		}else {

			echo "usuario o contraseña incorrectos"; 

		}



	}



}




?>