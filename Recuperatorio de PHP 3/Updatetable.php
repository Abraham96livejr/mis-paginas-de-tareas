<?php 
    include("conexion.php");
    
	    $uplegajo = $_REQUEST['Legajo'];
	 
	$upmarca= $_POST['Marca'];
	$upmodelo= $_POST['Modelo'];
	$upprecio= $_POST['Precio'];
	
    $updatetable = "UPDATE `autos` SET `Legajo`='$uplegajo',`Marca`='$upmarca' ,`Modelo`='$upmodelo' ,`Precio`='$upprecio' WHERE 1";
    
	$envio = $updatetable;
    header("Pagina.php");
    
	if (mysqli_query($conexion, $updatetable)) {
    echo "Datos Actualizados";
} else {
    echo "Error: En actualizar " . $updatetable . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
	
?>