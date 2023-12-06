<?php

include 'modelo_base_datos';

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Librería Online</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">Página Principal</a></li>
        <li><a href="admin.php">Admin</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <section>
      <div class="search-container">
        <h1>Busqueda de libros</h1>
        <div class="search-bar">
          <form>
            <input type="text" placeholder="Buscar">
            <input type="submit" value="Buscar">
          </form>
        </div>
      </div>
    </section>

    <section>
      <h1>Resultados de búsqueda</h1>
      <!-- Aquí podrían ir los resultados de la búsqueda -->
    </section>
  </main>

  <footer>
    <p class="footer-left">&copy; Gisell Gonzalez</p>
    <a href="#" class="footer-right">Ir para arriba</a>
  </footer>
</body>
</html>
