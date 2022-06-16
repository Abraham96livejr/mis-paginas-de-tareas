<html>
<body>

<?php
$conexion=mysqli_connect('localhost','root','','cinetarea'); 
if ($connect) {
		echo "conexion exitosa. <br />";
}
		$Personas =  $_POST['Personas'];
		$Dueno = $_POST['Dueno'];
		$Pelicula =  $_POST['pelicula'];
		$Horario = $_POST['Horario'];
		$dia =  $_POST['dia'];

		$consulta="INSERT INTO `reservado`(`Personas`, `Dueno`, `Pelicula`, `Horario`, `dia`)";
		
		$resultado=mysqli_query($connect,$consulta);

function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "- Personas: ".$resultados['Personas']."<br/>";
echo "- Dueno: ".$resultados['Dueno']."<br/>";
echo "- Pelicula: ".$resultados['Pelicula']."<br/>";
echo "- Horario: ".$resultados['Horario']."<br/>";
echo "- dia: ".$resultados['dia']."<br/>";


echo "**********************************<br/>";}
else {echo "<br/>No hay más datos!!! <br/>";}
}
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM reservado");
while ($fila = mysqli_fetch_array($result)){
mostrarDatos($fila);
}
mysqli_free_result($result);
mysqli_close($link);
?>

<br><br>

<body/>
<html/>