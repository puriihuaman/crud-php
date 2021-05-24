<?php
	include_once 'header.php';

	include_once 'footer.php';

	# link ayuda  https://oscargascon.es/uso-de-dompdf-para-generar-pdf-con-php-html-y-css/
	# https://github.com/dompdf/dompdf

		// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf
		require_once 'dompdf/autoload.inc.php';

		use Dompdf\Dompdf;
		
		// Instanciamos un objeto de la clase DOMPDF.
		$pdf = new DOMPDF();
	
		// Introducimos HTML de prueba
		$html = '<h1>Hola mundo!</h1>';
		
		// Definimos el tamaño y orientación del papel que queremos.
		$pdf->set_paper("A4", "portrait");
		
		// Cargamos el contenido HTML.
		$pdf->load_html(utf8_decode($html));
		
		// Renderizamos el documento PDF.
		$pdf->render();
		
		// Enviamos el fichero PDF al navegador.
		$pdf->stream('FicheroEjemplo.pdf');