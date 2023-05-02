<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "aplicacion";
	$port = "3307";

	// Create connection
	$conexion = new mysqli($servername, $username, $password,$database,$port);
	if($conexion->connect_error) {
	die("Connection failed: " . $conexion->connect_error);
    }
    
?>