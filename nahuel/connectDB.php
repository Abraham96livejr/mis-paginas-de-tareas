<?php
$servername = "localhost";
$username = "root";
$password = "";
$basededatos = "employees";

$conexion = mysqli_connect($servername, $username, $password = "") or die ("No se ha podido conectar al servidor de Base de datos");

// Selección del a base de datos a utilizar
$db = mysqli_select_db($conexion, $basededatos) or die ("Upps! Pues va a ser que no se ha podido conectar a la base de datos");

// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
