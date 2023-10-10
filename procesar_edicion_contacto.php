<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = $_POST["id"];
    // Recupera los datos del formulario de edición
    $nombre_completo = $_POST["nombre_completo"];
    $email_contacto = $_POST["email_contacto"];
    $numero_contacto = $_POST["numero_contacto"];
    $horario_comunicarse = $_POST["horario_comunicarse"];

    // Conecta a la base de datos
    $conn = new mysqli("localhost", "root", "", "crud_con");

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    // Actualiza los datos del contacto en la tabla
    $sql = "UPDATE contacto SET nombre_completo='$nombre_completo', email_contacto='$email_contacto', numero_contacto='$numero_contacto', horario_comunicarse='$horario_comunicarse' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: control_contacto.php");
        exit;
    } else {
        echo "Error al actualizar el contacto: " . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
}
?>
