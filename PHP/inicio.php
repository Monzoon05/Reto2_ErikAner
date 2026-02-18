<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Iniciar Sesión</title>
        <link rel="stylesheet" href="../CSS/estilo1.css">
        <link rel="stylesheet" href="../CSS/estiloInicioSesion.css">
    </head>
    <body>
        <div class="contenedorPrincipal">
            <header>
                <div id="cajaLogo">
                    <a href="../index.php"><img src="../IMAGENES/mm.png" id="imgLogo" alt="perfil"></a>
                </div>
                <div id="titulo">
                    <h1>Map Master</h1>
                </div>
                <nav id="cajaInicio">
                    <a href="inicio.php" class="enlaceInicio">Iniciar Sesión</a>
                    <a href="registro.php" class="enlaceInicio registro">Registrarse</a>
                </nav>
            </header>
            <article>
                <div id="cajaPerfil">
                    <img src="../IMAGENES/perfil.png" id="imgPerfil" alt="perfil">
                </div>
                <br>
                <br>
                <div id="formularioRegistro">
                    <label for="nomUsuario">Nombre de Usuario:</label>
                    <input type="text" name="nomUsuario" id="nomUsuario">
                    <br>
                    <br>
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" name="contraseña" id="contraseña">
                    <br>
                    <button type="submit" value="iniciar" id="registrarse">Iniciar sesion</button>
                </div>
            </article>
            <footer>
                </footer>
        </div>
        <p>Erik Menendez</p>
        <p>Erik Menendez</p>
        <p>Erik Menendez</p>

    </body>
</html>