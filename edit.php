<?php
	require_once './components/conexion.php';
	include_once './header.php';


	$conn = connect('school');
	$codigo = $_GET['codigo'];

	$query = $conn->prepare("SELECT * FROM estudiante WHERE codigo=:codigo ");
	$query->bindParam(':codigo', $codigo);
	$query->execute();

	$results = $query->fetch();

	if ( !$results ) { exit('No hay resultados para ese CODIGO'); }
?>

<h1 class="title">Modificar datos del Estudiante</h1>

<div class='container-form'>
	<form class='form' action='./components/update.php' method='post'>
		<input type="hidden" name='codigo' id='codigo' value="<?php echo $results['codigo']; ?>" />

		<div class='form__field'>
			<label for="names" class='form__label'>Nombres</label>
			<input type="text" id='names' name='names' class='input form__input' value="<?php echo $results['nombres']; ?>" autofocus>
		</div>
		
		<div class='form__field'>
			<label for="surnames" class='form__label'>Apellidos</label>
			<input type="text" id='surnames' name='surnames' class='input form__input'value="<?php echo $results['apellidos']; ?>">
		</div>
		
		<div class='form__field'>
			<label for="race" class='form__label'>Carrera</label>
			<input type="text" id='race' name='race' class='input form__input' value="<?php echo $results['carrera']; ?>">
		</div>
		
		<div class='form__field'>
			<label for="email" class='form__label'>Email</label>
			<input type="text" id='email' name='email' class='input form__input' value="<?php echo $results['email']; ?>">
		</div>
		
		<div class='form__field'>
			<label for="phone" class='form__label'>Telefono</label>
			<input type="text" id='phone' name='phone' class='input form__input' value="<?php echo $results['telefono']; ?>">
		</div>

		<div class='form__field'>
			<input type="submit" value="Guardar" id='button-save' class='button button-save'>
			<a href="./" class='button'>Volver</a>
		</div>
	</form>
</div>

<?php	include_once './footer.php'; ?>