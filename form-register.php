<?php
	require_once './components/conexion.php';
	include_once './header.php';
?>

<div class='container-form'>
	<form class='form' action='./components/register.php' method='post'>
		<div class='form__field'>
			<label for="names" class='form__label'>Nombres</label>
			<input type="text" id='names' name='names' class='input form__input' autofocus placeholder='Nombres'>
		</div>
		
		<div class='form__field'>
			<label for="surnames" class='form__label'>Apellidos</label>
			<input type="text" id='surnames' name='surnames' class='input form__input' placeholder='Apellidos'>
		</div>
		
		<div class='form__field'>
			<label for="race" class='form__label'>Carrera</label>
			<input type="text" id='race' name='race' class='input form__input' placeholder='Carrera'>
		</div>
		
		<div class='form__field'>
			<label for="email" class='form__label'>Email</label>
			<input type="text" id='email' name='email' class='input form__input' placeholder='Email'>
		</div>
		
		<div class='form__field'>
			<label for="phone" class='form__label'>Telefono</label>
			<input type="text" id='phone' name='phone' class='input form__input' placeholder='000-000-000'>
		</div>

		<div class='form__field'>
			<input type="submit" value="Guardar" id='button-save' class='button button-save'>
			<a href="./" class='button'>Volver</a>
		</div>
	</form>
</div>

<?php	include_once './footer.php'; ?>