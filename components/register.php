<?php

	require_once './conexion.php';
	$conn = connect('school');

	if ( !empty( $_POST ) ) {
		$names = $_POST['names'];
		$surNames = $_POST['surnames'];
		$race = $_POST['race'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
	}

	$query = $conn->prepare("INSERT INTO estudiante VALUES(null, '$names', '$surNames', '$race', '$email', '$phone') ");
	$query->execute();

	if ( !$query->rowCount() == 1 ) {
		echo 'ok';
	} else {
		echo 'Error';
	}

	header('Location: ./../home.php');
?>
