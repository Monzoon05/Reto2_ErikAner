<?php

include("../BDD/conexionBDD.php");

$conexion = conectarBDD();

$usuario = $_POST["nomUsuario"];
$password = $_POST["contraseña"];

$sql = "SELECT * FROM usuarios 
        WHERE nombreUsuario='$usuario' 
        AND contraseña='$password'";

$resultado = $conexion->query($sql);

if($resultado->num_rows == 1){

    header("Location: probar.php?user=$usuario");

}else{

    header("Location: inicio.php?error=Usuario o contraseña incorrectos");

}
