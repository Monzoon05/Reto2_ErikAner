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