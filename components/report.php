
<?php

	require_once 'dompdf/autoload.inc.php';
	use Dompdf\Dompdf;

	ob_start();

	include_once './pdf.php';
	$code = ob_get_clean();

	$pdf = new Dompdf(); // Creamos el objeto $dompdf

	$pdf->load_html($code); // Cargamos el contenido html
	$pdf->set_paper("A4", "landscape"); // Configuración de página
	$pdf->render(); // Renderización
	// $pdf->stream('FicheroEjemplo.pdf'); // Descargamos el pdf automaticamente
	$pdf->stream('FicheroEjemplo.pdf', array('Attachment'=>0)); // Previsualizar el pdf
?>