<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Contactos</title>
    <!-- Estilos CSS -->
    <style>
        /* Estilos para el cuerpo y el contenedor */
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            max-width: 800px;
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

        /* Estilos para la tabla de contactos */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        /* Estilos para los enlaces de editar y eliminar */
        a {
            text-decoration: none;
            color: #333;
        }

        a:hover {
            color: #555;
        }

        /* Estilos para el enlace de agregar nuevo contacto */
        .add-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Listado de Contactos</h1>

        <?php
        // Conexión a la base de datos
        $conn = new mysqli("localhost", "root", "", "crud_con");

        // Verifica la conexión
        if ($conn->connect_error) {
            die("Error de conexión a la base de datos: " . $conn->connect_error);
        }

        // Consulta a la base de datos
        $consulta = "SELECT * FROM contacto";
        $resultado = $conn->query($consulta);

        if ($resultado->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Teléfono</th><th>Horario</th><th>Acciones</th></tr>";

            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $fila['id'] . "</td>";
                echo "<td>" . $fila['nombre_completo'] . "</td>";
                echo "<td>" . $fila['email_contacto'] . "</td>";
                echo "<td>" . $fila['numero_contacto'] . "</td>";
                echo "<td>" . $fila['horario_comunicarse'] . "</td>";
                echo "<td><a href='editar_contacto.php?id=" . $fila['id'] . "'>Editar</a> | <a href='eliminar_contacto.php?id=" . $fila['id'] . "'>Eliminar</a></td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No hay contactos registrados.";
        }

        // Cierra la conexión a la base de datos
        $conn->close();
        ?>

        <!-- Enlace para agregar un nuevo contacto -->
        <a class="add-link" href="contacto.php">Agregar Nuevo Contacto</a>
    </div>
</body>
</html>
