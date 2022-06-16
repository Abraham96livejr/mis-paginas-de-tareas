<?php
include("conexion.php");
?>

<html>
<head>
<title>Tercer Trismete PHP</title>
<meta charset="utf-8">
</head>
<body>
<h2>Ver Datos</h2>
<br>
	<table>
		<tr>
			<td>Legajo</td>
			<td>Marca</td>
			<td>Modelo</td>
			<td>Precio</td>
		</tr>
<?php
$sql="SELECT * FROM Autos";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
?>		
		<tr>
			<td><?php echo $mostrar['Legajo'] ?></td>
			<td><?php echo $mostrar['Marca'] ?></td>
			<td><?php echo $mostrar['Modelo'] ?></td>
			<td><?php echo $mostrar['Precio'] ?></td>
	</tr>
		<?php
		}
		?>
	</table>

<form action="insertar.php" method="POST" method="post">
<h3>Por Favor Introduzca Sus Datos Para Autos</h3>
 <p>Legajo<p>
<input type="number" name="Legajo">
<p>Marca<p>
<input type="text" name="Marca">
<p>Modelo<p>
<input type="text" name="Modelo">
<p>Precio<p>
<input type="text" name="Precio">
<p>Cuando termine de completar los datos por favor dale Clic a Guardar<p>
<input type="submit" value="Guardar">
</form>

<form action="Updatetable.php" method="POST" method="post">
<h3>Actualizar</h3>
<p>Legajo<p>
<input type="number" name="Legajo">
<p>Marca<p>
<input type="text" name="Marca">
<p>Modelo<p>
<input type="text" name="Modelo">
<p>Precio<p>
<input type="text" name="Precio">
<input type="submit" value="Update" action="Updatetable.php">
</form>
		
<h3>Quitar Tabla</h3>
<form action="Droptable.php">
<input type="submit" action="Droptable.php" value="Borrar Tabla">
<input type="number" name="Legajo">

</body>
</html>