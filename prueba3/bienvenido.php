<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!--
  original arriba
   -->

<html>
<head>
<title>Bienvenido</title>
  <link rel="stylesheet" href="css/pop-inicio.css">
   <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/bootstrap-grid.css">
	  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
	   <link rel="stylesheet" href="css/bootstrap-reboot.css">
	    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
		<link rel="stylesheet" href="other/its2.css">		
</head>
<body>
<embed src="music\Sideshow Bob Theme song.mp3" autostarty="true" loop="true" volume="1" width="0" height="0">
	<h1 style=color:#fbff00>hola</h1>
	<p style=color:#fbff00>BIENVENIDO<p>
  </body class="funny">
</html>