<?php
	function conectarBDD(){
		
		$host = "localhost";
		$user = "root";
		$pass = "";
		$bd = "juegoreto2bdd";
		
		$conexion = new mysqli ($host,$user,$pass,$bd);
		
		if ($conexion->connect_error) {
			
			die("Error de conexion");
		}
		return $conexion;
	}