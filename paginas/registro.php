<?php
	include ("./conexion.php");
?>

<?php
	$username = $_REQUEST["aliasn"];
	$password = $_REQUEST["pasn1"];

	$query = "SELECT alias FROM usuarios WHERE alias = '" . $username . "'";

	$resultado = mysqli_query($conn, $query);

	if(($resultado->num_rows) > 0) {
		header("location: ./login.php");
	} else {
		$query = "INSERT INTO usuarios (alias, password) 
				VALUES ('" . $username . "', '" . $password . "')";
	  mysqli_query($conn, $query);
	  header("location: ../index.html");
	}
?>