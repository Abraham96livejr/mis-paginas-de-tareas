<?php
  $conexion=mysqli_connect('localhost','root','','cinetarea');

 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cine Belgrano 5672 MultiPlex</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
-->
  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<script src="js/bootstrap.bundle.js"></script>
	<script src="js/bootstrap.bundle.js.map"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.bundle.min.js.map"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.js.map"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.min.js.map"></script>
    <link rel="stylesheet" href="css/css bootstrap.css">

	<link rel="stylesheet" href="css/estilos2.css">
	
  </head>
  <body>
    <!-- -->
    <header>
      <nav>
        <ul>
          <li><a href="Inicio.php" style="color:#ff0000">Inicio</a></li>
          <li><a href="Reserva.php" style="color:#ff0000">Reserva</a></li>
		  <li><a href="Peliculas.php" style="color:#ff0000">Peliculas</a></li>
          <li><a href="Contacto.php" style="color:#ff0000">Contacto</a></li>
        </ul>
      </nav>
    </header>
    <!-- -->

    <!-- -->
    <section class="main">
      <div class="portada">
        <h3 style="color:#fbff00" class="titulo">Bienvenido a nuestro cine multiplex belgrano</h3>
      </div>
      <br>
      <aside>
        <h3 style="color:#ff0000" class="bottom">Reserva Tus Entradas </h3>
		<a href="Reserva.php" class="btn btn-success">COMPRAR</a>
        <br><br><br>
        <img src="imagenes/ticket.png" class="bottom" alt="" width="255" height="100">
      </aside>
      <aside>
        <h3 style="color:#ff0000" class="bottom">hecha un ojo a nuestra cartelera</h3>
		<a href="Peliculas.php" class="btn btn-success">VER</a>
        <br><br><br>
        <img src="imagenes/cartelera.jpg" class="iconos" alt="" width="255" height="100">
      </aside>
      <aside>
        <h3 style="color:#ff0000" class="bottom">Contactenos</h3>
		<a href="Contacto.php" class="btn btn-success">HABLANOS</a>
        <br><br><br>
        <img src="imagenes/employee cinema.png" class="iconos" alt="" width="105" height="100">
      </aside>
    </section>
    </form>
	<h2 Style="color:#ff0000">Cines Multiplex - Buenos Aires, Argentina. © 2016 Cines Multiplex  hecha por piratebey<h2>
  </body>
</html>
