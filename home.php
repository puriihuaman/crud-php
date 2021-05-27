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
			<a href="./components/report.php" class='button button-report' target='_blanc'>Reporte</a>
		</div>

		<div class="navegation__field">
			<input type="text" name='search' id='search' class='input' placeholder='Buscar'>
			<button name='button-search' class='button button-search' id='button-search'>Buscar</button>
		</div>
	</section>


	<div class="table-container">
		<table class="table">
			<thead class="table__header">
				<tr class="table__row">
					<td class='table__head'>Codigo</td>
					<td class='table__head'>Nombres</td>
					<td class='table__head'>Apellidos</td>
					<td class='table__head'>Carrera</td>
					<td class='table__head'>Email</td>
					<td class='table__head'>Telefono</td>
					<td class='table__head'></td>
					<td class='table__head'></td>
				</tr>
			</thead>
				
			<tbody class="table__body">
				<?php foreach( $results as $result) { ?>
				<tr class="table__row">
					<td class='table__data'><?php echo $result['codigo']; ?></td>
					<td class='table__data'><?php echo $result['nombres']; ?></td>
					<td class='table__data'><?php echo $result['apellidos']; ?></td>
					<td class='table__data'><?php echo $result['carrera']; ?></td>
					<td class='table__data'><?php echo $result['email']; ?></td>
					<td class='table__data'><?php echo $result['telefono']; ?></td>
					<td class='table__data'>
						<a href="edit.php?codigo=<?php echo $result['codigo']; ?>" class='button button-update'>Actualizar</a>
					</td>
					<td class='table__data'>
						<a href="./components/delete.php?codigo=<?php echo $result['codigo']; ?>" class='button button-delete'>Eliminar</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

<?php include_once 'footer.php'; ?>