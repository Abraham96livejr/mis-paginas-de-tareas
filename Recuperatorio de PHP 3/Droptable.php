<?php
include("conexion.php");

$uplegajo = $_REQUEST['Legajo'];

$droptabla = "DELETE FROM `autos` WHERE $uplegajo ";
$envio = $droptabla;
header("Pagina.php");

if (mysqli_query($conexion, $droptabla)) {
    echo "Tabla Borrada con exito";
} else {
    echo "No se borro la tabla error 4124 " . $droptabla . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);

?>