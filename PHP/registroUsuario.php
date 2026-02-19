<?php
include("../BDD/conexionBDD.php");

$conexion = conectarBDD();

$nombre = $_POST["nombre"];
$usuario = $_POST["nomUsuario"];
$contrasena = $_POST["contraseña"];

if(empty($nombre) || empty($usuario) || empty($contrasena)){
    header("Location: registro.php?error=Todos los campos son obligatorios");
    exit();
}

// Comprobar si el usuario ya existe
$stmt = $conexion->prepare("SELECT id FROM usuarios WHERE nombreUsuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if($resultado->num_rows > 0){
    header("Location: registro.php?error=El usuario ya existe");
    exit();
}

// Insertar SIN encriptar
$stmt = $conexion->prepare("INSERT INTO usuarios (nombre, nombreUsuario, contraseña) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nombre, $usuario, $contrasena);

if($stmt->execute()){
    header("Location: inicio.php?mensaje=Usuario registrado correctamente");
}else{
    header("Location: registro.php?error=Error al registrar");
}

$stmt->close();
$conexion->close();
?>
