<?php
session_start();
// Asegurar que PHP devuelva estrictamente un JSON
header('Content-Type: application/json');
error_reporting(0); // Evita que errores de PHP se impriman y rompan el JSON

$servidor = "localhost";
$basedatos = "juegoreto2bdd";
$usuario = "root";
$contrasena = "";

// Usar usuario 1 por defecto si no hay sesión iniciada
$id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : 1;

// Recibir datos de JS
$puntuacion = isset($_POST['puntuacion']) ? (int)$_POST['puntuacion'] : 0;
$tiempo = isset($_POST['tiempo']) ? (int)$_POST['tiempo'] : 0;
$modo_juego = "Europa"; 

try {
    $conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);
    
    if ($conexion->connect_error) {
        echo json_encode(['success' => false, 'error' => 'Error de conexión a BDD']);
        exit;
    }
    
    // Inserción segura preparada
    $sql = "INSERT INTO partidas (id_usuario, puntuacion, tiempo, fecha, modo_juego) VALUES (?, ?, ?, NOW(), ?)";
    $stmt = $conexion->prepare($sql);
    
    if (!$stmt) {
        echo json_encode(['success' => false, 'error' => 'Error en consulta: ' . $conexion->error]);
        exit;
    }
    
    $stmt->bind_param("iiis", $id_usuario, $puntuacion, $tiempo, $modo_juego);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'id_partida' => $stmt->insert_id]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Error al guardar: ' . $stmt->error]);
    }
    
    $stmt->close();
    $conexion->close();
    
} catch (Exception $e) {
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>