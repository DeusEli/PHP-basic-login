<?php
if (!isset($errorLogin)) {
	session_start();
}
include "header.html"; ?>
<header class="d-flex align-items-center mt-3 flex-column">
	<h1>Iniciar sesión</h1>
	<?php
	if (isset($_SESSION["incorrectData"])) {
		echo "<h3>Datos incorrectos</h3>";
	}
	?>
</header>
<main class="d-flex justify-content-center">
	<form action="login_validator.php" method="POST" class="form-group row w-25">
		<label for="username" class="form-label mt-2">Usuario:</label>
		<input type="text" class="form-control" name="username" id="username" placeholder="Nombre de usuario" required>

		<label for="password" class="form-label mt-2">Contraseña:</label>
		<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
		<input type="submit" name="send" value="Iniciar sesión" class="btn btn-success mt-2 mb-5">
	</form>
</main>
<?php include "footer.html";
