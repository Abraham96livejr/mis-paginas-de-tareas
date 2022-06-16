<?php
include "connectDB.php";

$result = "";

// Check connection
if (!$conexion) {
    $result = "Failed to connect to MySQL ";
} else {

    $resultado = mysqli_query($conexion, $_POST['sql']);

    if ($resultado) {
        echo "<table class='table table-sm table-dark'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='Nro' style='text-align: center'>Last</th>";
        echo "<th scope='Nombre'  style='text-align: center'>Handle</th>";
        echo "</tr>";
        echo "</thead>";

        // Bucle while que recorre cada registro y muestra cada campo en la tabla.
        while ($columna = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $columna['dept_no'] . "</td><td>" . $columna['dept_name'] . "</td>";
            echo "</tr>";
        }

        echo "</table>"; // Fin de la tabla
    } else {
        echo '<div class="alert alert-danger" role="alert">' . 'A ocurrido un error, revisar sintaxis de la Query' . '</div>';
    }
    // cerrar conexión de base de datos
    mysqli_close($conexion);
}