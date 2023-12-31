<?php

include 'modelo_base_de_datos';
include 'procesar_registro_libro';
include 'conexion_base_datos';

insertarDatos();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Panel de Administración</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <header>
    <nav>
      <ul>
        <li><a href="home.php">Página Principal</a></li>
        <li><a href="#">Admin</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="admin-section">
      <h1>Panel de Administración</h1>
      <div class="admin-buttons">
        <button onclick="mostrarFormulario('form-libro')">Registrar Libro</button>
        <button onclick="mostrarFormulario('form-usuario')">Registrar Usuario</button>
        <button onclick="mostrarFormulario('form-prestamo')">Prestar Libro</button>
        <button onclick="mostrarFormulario('form-devolucion')">Devolver Libro</button>
        <button onclick="mostrarFormulario('form-eliminar-libro')">Eliminar Libro</button>
        <button onclick="mostrarFormulario('form-eliminar-usuario')">Eliminar Usuario</button>
      </div>
    </section>
    <br>
    <section>
      <div>
        <form action="procesar_registro_libro.php" method="post" name="form-libro">
          <label for="nombre">Nombre del libro:</label><br>
          <input type="text" id="nombre" name="nombre"><br><br>

          <label for="autor">Autor:</label><br>
          <input type="text" id="autor" name="autor"><br><br>

          <label for="anio">Año de publicación:</label><br>
          <input type="number" id="anio" name="anio" min="1800" max="2099"><br><br>

          <label for="genero">Género:</label><br>
          <select id="genero" name="genero">
            <option value="Ficción">Ficción</option>
            <option value="No ficción">No ficción</option>
            <option value="Drama">Drama</option>
            <option value="Ciencia ficción">Ciencia ficción</option>
            <option value="Fantasía">Fantasía</option>
            <option value="Misterio">Misterio</option>
            <option value="Aventura">Aventura</option>
            <!-- Puedes agregar más opciones según los géneros que necesites -->
          </select><br><br>

          <input type="submit" value="Registrar libro">
        </form>
      </div>
    </section>
  </main>

  <footer>
    <p class="footer-left">&copy; Gisell González, Ricardo Puello</p>
    <a href="#" class="footer-right">Ir para arriba</a>
  </footer>
  <script>
    function mostrarFormulario(formularioId) {
      // Ocultar todos los formularios
      var formularios = document.getElementsByClassName('formulario');
      for (var i = 0; i < formularios.length; i++) {
        formularios[i].style.display = 'none';
      }

      // Mostrar el formulario correspondiente al ID recibido
      var formularioAMostrar = document.getElementById(formularioId);
      formularioAMostrar.style.display = 'block';
    }
  </script>
</body>

</html>