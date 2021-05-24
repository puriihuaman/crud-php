<?php
	require_once './conexion.php';

	$conn = connect('school');

	if ( !empty( $_POST) ) {
		$codigo = $_POST['codigo'];
		$names = $_POST['names'];
		$surNames = $_POST['surnames'];
		$race = $_POST['race'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
	}

	$query = $conn->prepare(
		"UPDATE estudiante 
		SET nombres = '$names', 
		apellidos = '$surNames', 
		carrera = '$race', 
		email = '$email', 
		telefono = '$phone'
		WHERE codigo = '$codigo' "
	);

	$query->execute();

	if ( !$query->rowCount() == 1 ) {
		echo 'ok';
	} else {
		echo 'Error';
	}


	header('Location: ./../home.php');
?>