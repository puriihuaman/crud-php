<?php
	include_once 'header.php';
	require_once './components/conexion.php';

	$conn = connect('school');

	$query = $conn->prepare("SELECT * FROM estudiante");
	$query->execute();

	$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
	
	<h1 class="title">Crud + DomPDF</h1>
	<section class='navegation'>
		<div class="navegation__field">
			<a href="./form-register.php" class='button button-new'>Nuevo</a>
			<a href="#" class='button button-report'>Reporte</a>
		</div>

		<div class="navegation__field">
			<input type="text" name='search' id='search' class='input' placeholder='Buscar'>
			<button name='button-search' class='button button-search' id='button-search'>Buscar</button>
		</div>
	</section>


	<div class="grid" id='grid'>
		<div class="grid__content">
			<div class="grid__header">
				<div class="grid__row">
					<p class='grid__head'>Codigo</p>
					<p class='grid__head'>Nombres</p>
					<p class='grid__head'>Apellidos</p>
					<p class='grid__head'>Carrera</p>
					<p class='grid__head'>Email</p>
					<p class='grid__head'>Telefono</p>
					<p class='grid__head'></p>
					<p class='grid__head'></p>
				</div>
			</div>
				
			<div class="grid__body">
				<?php foreach( $results as $result) { ?>
				<div class="grid__row">
					<p class='grid__data'><?php echo $result['codigo']; ?></p>
					<p class='grid__data'><?php echo $result['nombres']; ?></p>
					<p class='grid__data'><?php echo $result['apellidos']; ?></p>
					<p class='grid__data'><?php echo $result['carrera']; ?></p>
					<p class='grid__data'><?php echo $result['email']; ?></p>
					<p class='grid__data'><?php echo $result['telefono']; ?></p>
					<p class='grid__data'>
						<a href="edit.php?codigo=<?php echo $result['codigo']; ?>" class='button-update'>Actualizar</a>
					</p>
					<p class='grid__data'>
						<a href="./components/delete.php?codigo=<?php echo $result['codigo']; ?>" class='button-delete'>Eliminar</a>
					</p>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>

<?php include_once 'footer.php'; ?>