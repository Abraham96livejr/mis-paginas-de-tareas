<?php
include("conexion.php");

// Variables
$Legajo= $_POST['Legajo']; 
$Marca= $_POST['Marca'];
$Modelo= $_POST['Modelo'];
$Precio= $_POST['Precio'];

// $Insertar = "INSERT INTO `autos`(`Legajo`, `Marca`, `Modelo`, `Precio`) VALUES (2, 'fiat', 'palio',4)"; Prueba de que funciona
$Insertar = "INSERT INTO autos (`Legajo`, `Marca`, `Modelo`, `Precio`) VALUES ('$Legajo','$Marca', '$Modelo', '$Precio' )";

$envio= $Insertar; //Este Funciona
echo $Insertar;
header("Pagina.php");
if (mysqli_query($conexion, $Insertar)) {
    echo "Nuevos datos insertados";
} else {
    echo "Error: " . $Insertar . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);


?>
