<?php


?>


<!DOCTYPE html>
<html>
	<head>
		<title>Registro tienda</title>
	</head>
	<body>
		<center>
			<h2>INICIO DE SESION</h2>
			<form action="validar2.php" method="POST">
				<div class="jumbotron">
					<input type="text" name="user" placeholder="Nombre del usuario" required="required"><br><br>				
					<input type="password" name="pass" placeholder="Ingrese Contraseña" required="required"><br><br>
					<button type="submit" >Ingresar</button>
					<a href="registroTienda.php">Registrar mi Tienda</a>
				</div>
			</form>
		</center>
	</body>
</html>