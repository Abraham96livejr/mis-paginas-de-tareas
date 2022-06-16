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

    <section class="main">
      <div class="portadaC">
        <h3 style="color:#fbff00" class="titulo">Contacto</h3>
      </div>
	  
		<br>
	<table>
		<tr>
			<th style="color:#3cff00">Correo</td>
			<th style="color:#3cff00">TLF</td>
			<th style="color:#3cff00">Lugar</td>
		</tr>
		
	  <?php
$sql = "SELECT * FROM `soporte`";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
?>
		<tr>
			<td style="color:#ea00ff"><?php echo $mostrar['Correo'] ?></td>
			<td style="color:#ea00ff"><?php echo $mostrar['TLF'] ?></td>
			<td style="color:#ea00ff"><?php echo $mostrar['Lugar'] ?></td>
		</tr>
		<?php
		}
		?>
	</table>
	<h2 Style="color:#ff0000">Cines Multiplex - Buenos Aires, Argentina. © 2016 Cines Multiplex  hecha por piratebey<h2>
  </body>
</html>