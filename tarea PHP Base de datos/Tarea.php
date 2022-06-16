<?php
  $conexion=mysqli_connect('localhost','root','','empresa');

 ?>

<html lang="en">
<head>
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
</head>
<body Style=background-color:#cc8c1d;>
<h1 style="color:Red;">Los Clientes de la compañia</h1>
<br>
	<table>
		<tr>
			<td style="color:DodgerBlue;">id</td>
			<td style="color:DodgerBlue;">Nombre</td>
			<td style="color:DodgerBlue;">Apellido</td>
			<td style="color:DodgerBlue;">Telefonos</td>
			<td style="color:DodgerBlue;">Direccion</td>
			<td style="color:DodgerBlue;">Tipo_Cliente</td>
		</tr>
		
		<?php
$sql = "SELECT * FROM `clientes`";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
?>

		<tr>
			<td><?php echo $mostrar['Id'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Apellido'] ?></td>
			<td><?php echo $mostrar['Telefono'] ?></td>
			<td><?php echo $mostrar['Direccion'] ?></td>
			<td><?php echo $mostrar['Tipo_cliente'] ?></td>
		</tr>
		<?php
		}
		?>
	</table>

</body>
</html>