<?php
include "conexion_base_datos.php";
function insertarDatos()
{
    // Verificar si se ha recibido información del formulario
    if (isset($_POST['submit'])) {
        // Establecer la variable $connection como global
        global $connection;

        // Asignar los parámetros recibidos del formulario
        $nombre = $_POST['nombre'];
        $autor = $_POST['autor'];
        $genero = $_POST['genero'];
        $anio = $_POST['anio'];
        $STATUS_LIBRO = $_POST['STATUS_LIBRO'];


        // Crear la variable $query con el script de inserción
        $query = "INSERT INTO libros(nombre, autor, genero, anio, STATUS_LIBRO) VALUES ('$nombre', '$autor', '$genero', '$anio', '$STATUS_LIBRO')";

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
function actualizarDatos()
{
    // Verificar si se ha recibido información del formulario
    if (isset($_POST['submit'])) {
        // Establecer la variable $connection como global
        global $connection;

        // Asignar los parámetros recibidos del formulario
        $username = $_POST['username'];
        $contrasena = $_POST['contrasena'];
        $id = $_POST['id'];

        // Verificar si las variables recibidas tienen valores
        if (isset($username) && isset($contrasena)) {
            // Crear la variable $query con el script de actualización
            $query = "UPDATE usuarios SET ";
            $query .= "username = '$username', ";
            $query .= "contrasena = '$contrasena' ";
            $query .= "WHERE id = $id";

            // Ejecutar el query y asignar el resultado a $result
            $result = mysqli_query($connection, $query);

            // Validar si ha habido un fallo en la actualización de los datos
            if (!$result) {
                die('La actualización de los datos ha fallado ' . mysqli_error($connection));
            }
        }
        // Cierre la conexión a la base de datos
        mysqli_close($connection);
    }

}

function mostrarDatos()
{
    // Establecer la variable $connection como global
    global $connection;

    // Crear la variable $query para la consulta SELECT
    $query = "SELECT * FROM usuarios";

    // Ejecutar el query y asignar el resultado a $result
    $result = mysqli_query($connection, $query);

    // Validar si ha habido un fallo en la consulta a la tabla usuarios
    if (!$result) {
        die('La consulta a la tabla usuarios ha fallado ' . mysqli_error($connection));
    }

    // Mostrar los IDs recuperados de $result
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }

    // Cierre la conexión a la base de datos
    mysqli_close($connection);
}

function borrarDatos()
{
    // Verificar si se ha recibido información del formulario
    if (isset($_POST['submit'])) {
        // Establecer la variable $connection como global
        global $connection;

        // Asignar los parámetros recibidos del formulario
        $username = $_POST['username'];
        $contrasena = $_POST['contrasena'];
        $id = $_POST['id'];

        // Verificar si las variables recibidas tienen valores
        if (isset($username) && isset($contrasena)) {
            // Crear la variable $query con el script de eliminación de la fila
            $query = "DELETE FROM usuarios ";
            $query .= "WHERE id = $id ";

            // Ejecutar el query y asignar el resultado a $result
            $result = mysqli_query($connection, $query);

            // Validar si ha habido un fallo en la eliminación de los datos
            if (!$result) {
                die('La eliminación de la fila ha fallado ' . mysqli_error($connection));
            }
        }
        // Cierre la conexión a la base de datos
        mysqli_close($connection);
    }
}

function leerFilas()
{
    // Establecer la variable $connection como global
    global $connection;

    // Crear la variable $query para la consulta SELECT
    $query = "SELECT * FROM usuarios";

    // Ejecutar el query y asignar el resultado a $result
    $result = mysqli_query($connection, $query);

    // Validar si ha habido un fallo en la consulta a la base de datos
    if (!$result) {
        die('La consulta a la BD ha fallado ' . mysqli_error($connection));
    }

    // Mostrar los resultados
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Usuario: " . $row["username"] . " - Contraseña: " . $row["contrasena"] . "<br>";
    }

    // Cierre la conexión a la base de datos
    mysqli_close($connection);
}
?>