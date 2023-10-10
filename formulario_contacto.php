<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    
    <!-- Estilos CSS -->
    <style>
        /* Estilos para el cuerpo y el contenedor */
        body {
            font-family: 'Roboto', sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Estilos para etiquetas de formulario */
        label {
            display: block;
            margin-bottom: 10px;
            text-align: left;
        }

        /* Estilos para campos de entrada */
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        /* Estilos para el botón de envío */
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            display: block;
            margin: 0 auto;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulario de Contacto</h1>
        <form action="procesar_contacto.php" method="post">
            <label for="nombre_completo">Nombre Completo:</label>
            <input type="text" id="nombre_completo" name="nombre_completo" required><br>

            <label for="email_contacto">Email de Contacto:</label>
            <input type="email" id="email_contacto" name="email_contacto" required><br>

            <label for="numero_contacto">Número de Contacto:</label>
            <input type="text" id="numero_contacto" name="numero_contacto" required><br>

            <label for="horario_comunicarse">Horario para comunicarse:</label>
            <input type="text" id="horario_comunicarse" name="horario_comunicarse" required><br>

            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>
