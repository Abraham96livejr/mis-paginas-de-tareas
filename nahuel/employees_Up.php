<?php
include "connectDB.php";

$result = "";

// Check connection
if (!$conexion) {
    $result = "Failed to connect to MySQL ";
} else {


    $resultado = mysqli_query($conexion, $_POST['sql']);

    if (mysqli_query($conexion, $_POST['sql'])) {
        echo '<div class="alert alert-success" role="alert">' . 'Registro Actualizado Satisfactoriamente' . '</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">' . 'Error Actualizando Registro' . mysqli_error($conexion) .'</div>';
    }

    $resultado = mysqli_query($conexion, "SELECT * FROM employees LIMIT 20");

    if ($resultado) {
        echo "<table class='table table-sm table-dark'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th scope='emp_no' style='text-align: center'>emp_no</th>";
        echo "<th scope='birth_date'  style='text-align: center'>birth_date</th>";
        echo "<th scope='first_name'  style='text-align: center'>first_name</th>";
        echo "<th scope='last_name'  style='text-align: center'>last_name</th>";
        echo "<th scope='gender'  style='text-align: center'>gender</th>";
        echo "<th scope='hire_date'  style='text-align: center'>hire_date</th>";
        echo "</tr>";
        echo "</thead>";

        // Bucle while que recorre cada registro y muestra cada campo en la tabla.
        while ($columna = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $columna['emp_no'] . "</td>";
            echo "<td>" . $columna['birth_date'] . "</td>";
            echo "<td>" . $columna['first_name'] . "</td>";
            echo "<td>" . $columna['last_name'] . "</td>";
            echo "<td>" . $columna['gender'] . "</td>";
            echo "<td>" . $columna['hire_date'] . "</td>";
            echo "</tr>";
        }

        echo "</table>"; // Fin de la tabla
    } else {
        echo '<div class="alert alert-danger" role="alert">' . 'A ocurrido un error, revisar sintaxis de la Query' . '</div>';
    }
    // cerrar conexión de base de datos
    mysqli_close($conexion);
}