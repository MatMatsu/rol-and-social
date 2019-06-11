<?php
	$hostname = "localhost";
	$db_username = "root";
	$db_password = "";
	$db = "red_social";

	$conn = mysqli_connect($hostname, $db_username, $db_password, $db);

	if($conn) {
		echo "<script>console.log('Conectado a hiper compu mega red!')</script>";
	} else {
		echo "Ups! Fallo el condensador de flujo!";
	}
?>

