<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Dropdown de Libros</title>
</head>
<body>
  <h1>Libros Disponibles</h1>

  <form action="tu_pagina.php" method="post">
    <select name="libros">
      <?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "tu_usuario";
        $password = "tu_contraseña";
        $dbname = "nombre_de_tu_basededatos";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
          die("Conexión fallida: " . $conn->connect_error);
        }

        // Consulta para obtener libros
        $sql = "SELECT id, titulo FROM libros";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // Generar opciones del dropdown
          while($row = $result->fetch_assoc()) {
            echo "<option value='" . $row["id"] . "'>" . $row["titulo"] . "</option>";
          }
        } else {
          echo "<option value=''>No hay libros disponibles</option>";
        }

        $conn->close();
      ?>
    </select>
    <input type="submit" value="Seleccionar">
  </form>
</body>
</html>
