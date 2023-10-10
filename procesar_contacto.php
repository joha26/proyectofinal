<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
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

    // Inserta el nuevo contacto en la tabla
    $sql = "INSERT INTO contacto (nombre_completo, email_contacto, numero_contacto, horario_comunicarse) VALUES ('$nombre_completo', '$email_contacto', '$numero_contacto', '$horario_comunicarse')";

    if ($conn->query($sql) === TRUE) {
        header("Location: contacto.php");
        exit;
    } else {
        echo "Error al registrar el contacto: " . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
}
?>
