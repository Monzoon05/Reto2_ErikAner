<?php
$puntos = isset($_GET['puntos']) ? $_GET['puntos'] : 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Game Over - Map Master</title>
    <style>
        /* REQUISITOS MAP MASTER */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #E3F2FD;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* HEADER - EXACTAMENTE IGUAL QUE EL INDEX */
        header {
            background-color: #2196F3;
            padding: 20px;
            height: 90px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #cajaLogo {
            width: 80px;
            height: 50px;
        }

        #imgLogo {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        #titulo h1 {
            color: white;
            font-size: 32px;
            font-weight: bold;
        }

        #cajaInicio {
            display: flex;
            gap: 20px;
        }

        .enlaceInicio {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }

        .enlaceInicio:hover {
            color: #FFC107;
        }

        /* MAIN - CENTRAR TODO */
        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 48px;
            color: #2196F3;
            margin-bottom: 10px;
        }

        .puntos {
            font-size: 32px;
            color: #4CAF50;
            font-weight: bold;
            margin: 20px 0 30px;
            background: white;
            padding: 10px 30px;
            border-radius: 8px;
            border: 2px solid #388E3C;
        }

        /* BOTONES */
        .botones {
            display: flex;
            gap: 20px;
        }

        .btn {
            background-color: #FFC107;
            color: white;
            font-weight: bold;
            font-size: 18px;
            padding: 12px 30px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn:hover {
            background-color: #FFB300;
        }

        .btn:active {
            filter: brightness(0.9);
        }

        .btn.verde {
            background-color: #4CAF50;
        }

        .btn.verde:hover {
            background-color: #388E3C;
        }

        /* FOOTER */
        footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>
    <!-- HEADER - EXACTAMENTE IGUAL AL INDEX (sin iniciar sesión) -->
    <header>
        <div id="cajaLogo">
            <a href="../index.php"><img src="../IMAGENES/mm.png" id="imgLogo" alt="perfil"></a>
        </div>
        <div id="titulo">
            <h1>Map Master</h1>
        </div>
        <nav id="cajaInicio">
            <!-- VACÍO - sin enlaces de iniciar sesión ni registrarse -->
        </nav>
    </header>

    <main>
        <h1>💀 GAME OVER</h1>
        <div class="puntos"><?php echo $puntos; ?> puntos</div>
        
        <div class="botones">
            <a href="juego.php" class="btn">JUGAR OTRA VEZ</a>
            <a href="../index.php" class="btn verde">INICIO</a>
        </div>
    </main>

    <footer>
        <p>Map Master</p>
    </footer>
</body>
</html>