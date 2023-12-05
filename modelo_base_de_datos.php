<?php
include "conexion_base_datos.php";
function insertarDatos()
{
    // Verificar si se ha recibido información del formulario
    if (isset($_POST['submit'])) {
        // Establecer la variable $connection como global
        global $connection;

        // Asignar los parámetros recibidos del formulario
        $username = $_POST['username'];
        $contrasena = $_POST['contrasena'];

        // Crear la variable $query con el script de inserción
        $query = "INSERT INTO usuarios(username, contrasena) VALUES ('$username', '$contrasena')";

        // Ejecutar el query y asignar el resultado a $result
        $result = mysqli_query($connection, $query);

        // Validar si el registro se ha agregado o no
        if ($result) {
            echo "Registro realizado con éxito";
        } else {
            die('La inserción de los datos ha fallado ' . mysqli_error($connection));
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($connection);
    }
}