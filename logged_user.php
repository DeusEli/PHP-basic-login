<?php
session_start();
include "header.html"; ?>
<section class="d-flex align-items-center p-5 flex-column">
	<h3>Has iniciado sesión como: <?php echo $_SESSION["user"]
									?></h3>
	<a href="logout.php" class="btn btn-danger mt-3">Cerrar Sesión</a>
</section>
<?php include "footer.html";
