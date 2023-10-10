<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contacto</title>
    <!-- Estilos CSS -->
    <style>
        /* Estilos para el cuerpo y el contenedor */
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para el título */
        h1 {
            text-align: center;
        }

        /* Estilos para etiquetas de formulario */
        label {
            display: block;
            margin-bottom: 10px;
        }

        /* Estilos para campos de entrada */
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
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
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Contacto</h1>

        <?php
        // Verificamos si se proporciona un ID válido a través del parámetro GET
        if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
            $id = $_GET["id"];

            // Conecta a la base de datos
            $conn = new mysqli("localhost", "root", "", "crud_con");

            // Verifica la conexión
            if ($conn->connect_error) {
                die("Error de conexión a la base de datos: " . $conn->connect_error);
            }

            // Consulta a la base de datos
            $sql = "SELECT * FROM contacto WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                // Los datos del contacto se han encontrado, ahora puedes se muestra el formulario de edición
                ?>
                <form action="procesar_edicion_contacto.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <label for="nombre_completo">Nombre Completo:</label>
                    <input type="text" id="nombre_completo" name="nombre_completo" value="<?php echo $row['nombre_completo']; ?>" required><br>

                    <label for="email_contacto">Email de Contacto:</label>
                    <input type="email" id="email_contacto" name="email_contacto" value="<?php echo $row['email_contacto']; ?>" required><br>

                    <label for="numero_contacto">Número de Contacto:</label>
                    <input type="text" id="numero_contacto" name="numero_contacto" value="<?php echo $row['numero_contacto']; ?>" required><br>

                    <label for="horario_comunicarse">Horario para Comunicarse:</label>
                    <input type="text" id="horario_comunicarse" name="horario_comunicarse" value="<?php echo $row['horario_comunicarse']; ?>" required><br>

                    <input type="submit" value="Guardar Cambios">
                </form>
                <?php
            } else {
                echo "No se encontró el contacto.";
            }

            // Cierra la conexión a la base de datos
            $conn->close();
        } else {
            echo "ID de contacto no válido.";
        }
        ?>

        <!-- Enlace para volver a la lista de contactos -->
        <a href="control_contacto.php">Volver a la Lista de Contactos</a>
    </div>
</body>
</html>
