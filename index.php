<?php
$conn = new mysqli("localhost", "root", "", "juegoreto2bdd");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$sql = "SELECT u.nombre, MAX(p.puntuacion) as mejor_puntuacion
        FROM partidas p
        INNER JOIN usuarios u ON p.id_usuario = u.id
        GROUP BY p.id_usuario
        ORDER BY mejor_puntuacion DESC
        LIMIT 10";

$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Mi Perfil</title>
        <link rel="stylesheet" href="CSS/estilo1.css">
    </head>
    <body>
        <div class="contenedorPrincipal">
            <header>
                <div id="cajaLogo">
                    <a href="index.php"><img src="IMAGENES/mm.png" id="imgLogo" alt="perfil"></a>
                </div>
                <div id="titulo">
                    <h1>Map Master</h1>
                </div>
                <nav id="cajaInicio">
                    <a href="PHP/inicio.php" class="enlaceInicio">Iniciar Sesión</a>
                    <a href="PHP/registro.php" class="enlaceInicio registro">Registrarse</a>
                </nav>
            </header>
            <article id="cuerpo">
                
    <button id="botonJugar" onclick="empezarJuego()">Jugar</button>

    <div id="tablaTop">
        <h2>🏆 Top 10 Jugadores</h2>
        <table>
            <tr>
                <th>Posición</th>
                <th>Jugador</th>
                <th>Puntuación</th>
            </tr>

            <?php
            $posicion = 1;
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>
                            <td>".$posicion."</td>
                            <td>".$fila['nombre']."</td>
                            <td>".$fila['mejor_puntuacion']."</td>
                          </tr>";
                    $posicion++;
                }
            } else {
                echo "<tr><td colspan='3'>No hay datos</td></tr>";
            }
            ?>
        </table>
    </div>

               <button id="botonJugar" onclick="empezarJuego()">Jugar</button>
            </article>
            <footer>
            
            </footer>
        </div>
        <script>
            function empezarJuego() {
            window.location.href = "PHP/juego.php";
            }
        </script>
    </body>
</html>