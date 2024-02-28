<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./estilo.css">
	<title>Registrar usuario</title>
</html>


<body>
	<div class="login-box">
		<div class="logo">
			<h2>Artemisa</h2>
		</div>
		<h2>Registrate!</h2>
		<form method="post">
			<div class="user-box">
				<input type="text" name="name" required="">
				<label>Nombre</label>
			</div>
			<div class="user-box">
				<input type="text" name="lastname" required="">
				<label>Apellido</label>
			</div>
			<div class="user-box">
				<input type="text" name="email" required="">
				<label>Email</label>
			</div>
			<a href="#">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<input type="submit" class="submit" name="register">
			</a>
		</form>
	</div>
	<?php
	include("registrar.php");
	?>
</body>

</html>



<!-- <form method="post">
		<h1>¡Suscribete!</h1>
		<input type="text" name="name" placeholder="Nombre completo">
		<input type="email" name="email" placeholder="Email">
		<input type="submit" name="register">
	</form>
		