<?php
	include_once 'header.php';
?>

<h1 class='title'>DomPDF</h1>

<article>
	<h2 class='subtitle'>¿Que es DomPDF?</h2>

	<section>
		<p>
			DOMPDF es un conversor de HTML a PDF escrito en PHP. Interpreta HTML y CSS para la generación de documentos en PDF con un soporte bastante adecuado para CSS 2.1, incluso algunos avanzados como bordes redondeados en las cajas. En este post presentaré algunas peculiaridades de esta librería que espero ayuden a sacar partido de la versatilidad del HTML para generar documentos en PDF.
		</p>
		<img src="https://i.ytimg.com/vi/bFRLpf3G_Yo/maxresdefault.jpg" alt="" class='img'>
	</section>
	<section>
		<h3 class='third-title'>Nota!</h3>
	</section>
	<p>
		Parece que mucha gente se olvida que HTML permite trabajar en muchos soportes distintos, no solo en display, sino también en impresora. Hoy en día documentación como albaranes de compra en comercio electrónico se generan online para enviar al comprador. Haremos uso de esta característica de HTML para componer HTML ajustado a soporte papel que será el que utilizaremos para generar PDFs.
	</p>
</article>

<section>
	<p>Uso basico de DomPDF</p>
	<article>
		<p>Cargamos la libre DomPDF</p>
		<code>require_once ('dompdf/dompdf_config.inc.php');</code>

		<p>Instanciamos un objeto de la clase DOMPDF.</p>
		<code>$pdf = new DOMPDF();</code>

		<p>Creamos una etiqueta HTML</p>
		<code>$html = "< h1>Hola mundo!< h1>";</code>

		<p>Creamos el objeto $dompdf</p>
		<code>$pdf = new Dompdf();</code>

		<p>Cargamos el contenido html</p>
		<code>$pdf->load_html($code);</code>

		<p>Configuración de página</p>
		<code>$pdf->set_paper("A4", "portrait");</code>

		<p>Renderización</p>
		<code>$pdf->render();</code>

		<p>Descargamos el pdf automaticamente</p>
		<code>$pdf->stream('FicheroEjemplo.pdf');</code>

		<p>Previsualizar el pdf</p>
		<code>$pdf->stream('FicheroEjemplo.pdf', array('Attachment'=>0));</code>
	</article>
</section>

<?php include_once 'footer.php'; ?>