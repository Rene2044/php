<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al Sistema</title>
    <style>
        /* Estilos CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        .welcome-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 400px;
            width: 90%;
        }

        h1 {
            color: #4a5568;
            margin-bottom: 1rem;
            font-size: 1.8rem;
        }

        p {
            color: #718096;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        /* Contenedor para botones */
        .button-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .btn {
            display: inline-block;
            background: #764ba2;
            color: white;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn:hover {
            background: #5a3782;
            transform: translateY(-2px);
        }

        /* Estilo opcional para diferenciar el segundo botón */
        .btn-secondary {
            background: #4a5568;
        }

        .btn-secondary:hover {
            background: #2d3748;
        }

        .date-info {
            margin-top: 1.5rem;
            font-size: 0.85rem;
            color: #a0aec0;
            border-top: 1px solid #edf2f7;
            padding-top: 1rem;
        }
    </style>
</head>
<body>

    <?php
        // Lógica PHP básica
        $nombre_usuario = "Invitado";
        $hora_actual = date("H");
        $saludo = "";

        if ($hora_actual < 12) {
            $saludo = "¡Buenos días!";
        } elseif ($hora_actual < 19) {
            $saludo = "¡Buenas tardes!";
        } else {
            $saludo = "¡Buenas noches!";
        }
    ?>

    <div class="welcome-card">
        <h1><?php echo $saludo; ?></h1>
        <p>Hola Señor Stark, <strong><?php echo $nombre_usuario; ?></strong>. Nos alegra tenerte de vuelta en nuestra plataforma.</p>

        <div class="button-group">
            <a href="#" class="btn">Explorar Tablero</a>
            <a href="{{ route('pagina') }}"> Siguiente Página</a>
        </div>

        <div class="date-info">
            Hoy es <?php echo date("d/m/Y"); ?>
        </div>
    </div>

</body>
</html>
