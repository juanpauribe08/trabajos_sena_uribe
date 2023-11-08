<?php
// Configuración de la conexión a la base de datos
$servername = "186.117.206.3"; // Cambia esto por la dirección del servidor MySQL
$username = "root"; // Cambia esto por tu nombre de usuario de MySQL
$password = "Sena2023!"; // Cambia esto por tu contraseña de MySQL
$dbname = "formulario_uribe"; // Cambia esto por el nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo_electronico = $_POST['correo_electronico'];

// Preparar la consulta para insertar los datos en la tabla de la base de datos
$sql = "INSERT INTO usuarios (nombre, apellido, correo_electronico) VALUES ('$nombre', '$apellido', '$correo_electronico')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
