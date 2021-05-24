<?php
	require_once './conexion.php';

	$conn = connect('school');

	if ( !empty( $_GET) ) { $codigo = $_GET['codigo']; }

	$query = $conn->prepare("DELETE FROM estudiante WHERE codigo = '$codigo' ");

	$query->execute();

	if ( !$query->rowCount() == 1 ) {
		echo 'ok';
	} else {
		echo 'Error';
	}

	header('Location: ./../home.php');
?>