<?php
$conexion=mysqli_connect('localhost','root','','cinetarea');

$Personas =  $_POST['Personas'];
$Dueno = $_POST['Dueno'];
$Pelicula =  $_POST['pelicula'];
$Horario = $_POST['Horario'];
$dia =  $_POST['dia'];

if($telefono and $nombre){

$db = mysql_select_db("reservado",$conexion);
$consulta = "INSERT INTO `reservado`(`Personas`, `Dueno`, `Pelicula`, `Horario`, `dia`) VALUES ($Personas $Dueno $Peliculas $Horario $dia)";
$res = mysql_query($consulta);

mysql_close($conexion);

}
else{

}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cine Belgrano 5672 MultiPlex Reserva</title>
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
      <div class="portadaR">
        <h3 style="color:#fbff00" class="titulo">Reserva</h3>
      </div>
	  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Piola Vas A Reservar Para No Hacer La Fila!</h4>
  <h3 class="badge badge-danger">Advertencia mire antes la cartelera Antes De Reservar</h3>
  <hr>
  <h3 class="badge badge-primary" class="mb-0">llene el formulario corectamente (si hay errores no se tomara en serio su reserva)</h3>
  <p></p>
  <h3 class="badge badge-pill badge-warning" class="mb-0">Si Necesitas Ayuda Dale Click al Boton De Soporte </h3>
</div>
	  <p></p>
        <form action="reciboR.php" method="POST">
                <label class="badge badge-pill badge-warning">Nombre De La Pelicula</label>
                <input type="text" name="username" class="form-control" value="<?php echo $Peliculas; ?>">
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label class="badge badge-pill badge-secondary">Horario (este formato: 12:10pm "HS=12" O  23:30 "HS=24")</label>
                <input type="text" name="password" class="form-control" value="<?php echo $Horario; ?>">
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label class="badge badge-pill badge-info">Numero de Personas (numero 1234)</label>
                <input type="text" name="confirm_password" class="form-control" value="<?php echo $Personas; ?>">
            </div>
			<div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label class="badge badge-pill badge-danger">Dia (ejemplo "05-06-2019")</label>
                <input type="text" name="confirm_password" class="form-control" value="<?php echo $dia; ?>">
            </div>
                <label class="badge badge-pill badge-success">Dueño (nombre del comprador osea vos)</label>
                <input type="text" name="confirm_password" class="form-control" value="<?php echo $Dueno; ?>">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Comprar 75 ARG (Pago Facil)"><!--creo que le puedo dar un set a determinado numero entre 75 y 50 -->
				<span class="badge badge-pill badge-dark">Lunes,Martes,Jueves,Sabados y Domingos la compra</span>
				<input type="submit" class="btn btn-primary" value="Promo Viernes 50 ARG (Pago Facil)"> 
				<span class="badge badge-pill badge-dark">Miercoles y Viernes sale Promo</span>
            </div>
			</form>
			<h2 Style="color:#ff0000">Cines Multiplex - Buenos Aires, Argentina. © 2016 Cines Multiplex  hecha por piratebey<h2>
  </body>
</html>