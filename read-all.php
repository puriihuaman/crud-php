<?php
	require_once './components/conexion.php';

	$conn = connect('school');

	$query = $conn->prepare("SELECT * FROM estudiante");
	$query->execute();

	$result = $query->fetchAll(PDO::FETCH_ASSOC);
