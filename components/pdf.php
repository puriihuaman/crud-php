<?php
	require_once './conexion.php';

	$conn = connect('school');

	$query = $conn->prepare("SELECT * FROM estudiante");
	$query->execute();

	$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Reporte</title>
		<style>
			* {
				box-sizing: border-box;
			}
			body {
				font-family: sans-serif;
			}
			table {
				width: 100%;
				border-collapse: collapse;
				border: 1px solid #000;
			}
			tr {
				border: 1px solid #000;

			}
			td, th {
				text-align: center;
				border: 1px solid #000;
				padding: .5rem 0;
				text-transform: capitalize;
			}
			td:nth-child(5) {
				text-transform: lowercase;
			}
		</style>
	</head>
	<body>
		<main>
			<table style=''>
				<thead style='background-color: #000; color: white;'>
					<tr style='text-align: center;'>
						<th>Codigo</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Carrera</th>
						<th>Email</th>
						<th>Telefono</th>
						<th></th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<?php foreach( $results as $result) { ?>
						<tr class="grid__row">
							<td class='grid__ data'><?php echo $result['codigo']; ?></td>
							<td class='grid__ data'><?php echo $result['nombres']; ?></td>
							<td class='grid__ data'><?php echo $result['apellidos']; ?></td>
							<td class='grid__ data'><?php echo $result['carrera']; ?></td>
							<td class='grid__ data'><?php echo $result['email']; ?></td>
							<td class='grid__ data'><?php echo $result['telefono']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</main>
	</body>
</html>