<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Conecta a la base de datos
    $conn = new mysqli("localhost", "root", "", "crud_con");

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Elimina el contacto de la tabla
    $sql = "DELETE FROM contacto WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: control_contacto.php");
        exit;
    } else {
        echo "Error al eliminar el contacto: " . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
}
?>
