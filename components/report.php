<?php
	use Dompdf\Dompdf ;
	require_once 'dompdf/autoload.inc.php';
	use Dompdf\Options;


	require_once './conexion.php';

	$conn = connect('school');

	$query = $conn->prepare("SELECT * FROM estudiante");
	$query->execute();

	$results = $query->fetchAll(PDO::FETCH_ASSOC);

?>



<?php


	$pdf = new Dompdf();
	
	ob_start();
	

	
	
	$pdf->set_paper("A4", "portrait");
	$pdf->render();
	$pdf->stream('FicheroEjemplo.pdf');

?>