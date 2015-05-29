<?php
include("../modelo/conexion.php");

$user = $_POST['usuario'];
$pass = $_POST['password']; 

$usuario = new conexion; 
$usuario->login($user, $pass);
$usuario->cerrar(); 




?>