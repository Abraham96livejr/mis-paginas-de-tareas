<?php
  $conexion=mysqli_connect('localhost','root','','mcdonalds');

 ?>

<html lang="en">
<head>
  <title>Soporte</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
  <link rel="stylesheet" href="css/inicio1mod.css">
</head>

<body class=fondo7>
<!-- -->

<div class="container">
<img src="Imagenes\McDonaldslogo.png" class=logotipo alt="logotipo" width="60" height="60">
  <h1 class=h1colortitulo>Administrador de McDonalds</h1>
  <!--
  <ul class=ulhorizontal>
<li class=ul.horizontal2><a class=color1 href="entrada.html">*Inicio*</a></li>
<li class=ul.horizontal2><a class=color2 href="Locales.html">Locales</a></li>
<li class=ul.horizontal2><a class=h1color href="Empleados.html">Empleados</a></li>
<li class=ul.horizontal2><a class=color2 href="Ingredientes.html">Ingredientes</a></li>
<li class=ul.horizontal2><a class=h1color href="Reservas.html">Reservas</a></li>
<li class=ul.horizontal2><a class=color1 href="Soporte.html">Soporte</a></li>
</ul>
 -->
  <p class=h1colortitulo>Modo Admin de los McDonalds en Argentina </p>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title color1" >Inicio</h5>
        <p class="card-text">el inicio de la pagina</p>
        <a href="entrada.html" class="btn btn-primary">Inicio</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title color2">Locales</h5>
        <p class="card-text">Todos los locales de los McDonalds en Argentina</p>
        <a href="Locales.html" class="btn btn-primary">Direcciones</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" class="fondo3Card">
        <h5 class="card-title h1color">Empleados</h5>
        <p class="card-text">Observar la informacion personal de los empleados de los McDonalds en Argentina</p>
        <a href="Empleados.html" class="btn btn-primary">Informacion del personal</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" class="fondo1Card">
        <h5 class="card-title color2">Ingredientes</h5>
        <p class="card-text">verifica los almacenes de comida de los locales los McDonalds</p>
        <a href="Ingredientes.html" class="btn btn-primary">mirar almacen</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" class="fondo2Card">
        <h5 class="card-title color1">Reservas</h5>
        <p class="card-text">verificar y Añadir Reservas de las mesas de los locales y sus cumpleaños</p>
        <a href="Reservas.html" class="btn btn-primary">Verificar y Añadir</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body" class="fondo3Card">
        <h5 class="card-title h1color">*Soporte*</h5>
        <p class="card-text">pedir soporte tecnico a la pagina web </p>
        <a href="Soporte.html" class="btn btn-primary">Ayuda</a>
      </div>
    </div>
  </div>
</div>

<h1 class=h1colortitulo>↓Soporte de la Pagina web del la administracion web Admin↓</h1>
<br>
	<table>
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Correo</td>
			<td>Pais</td>
			<td>TLF</td>
		</tr>

<?php
$sql = "SELECT * FROM `soporte`";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
?>

		<tr>
			<td><?php echo $mostrar['Id_S'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Correo'] ?></td>
			<td><?php echo $mostrar['Pais'] ?></td>
			<td><?php echo $mostrar['TLF'] ?></td>
		</tr>
		<?php
		}
		?>
	</table>

</body>
</html>
