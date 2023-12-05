<?php
include 'conexion_base_datos.php';
// Recibir los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $autor = $_POST["autor"];
    $anio = $_POST["anio"];
    $genero = $_POST["genero"];

    // Preparar la consulta SQL para insertar los datos en la tabla 'libros'
    $sql = "INSERT INTO libros (nombre, autor, anio, genero)
    VALUES ('$nombre', '$autor', '$anio', '$genero')";

    // Ejecutar la consulta y verificar si se realizó con éxito
    if ($conn->query($sql) === TRUE) {
        echo "El libro se registró correctamente en la base de datos.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>