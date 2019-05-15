



<!DOCTYPE html>
<html>
	<head>
		<title>Registro tienda</title>
	</head>
	<body>
		<center>
			<h2>Registro de tienda</h2>
			<form action="validar.php" method="POST" >
				<div class="jumbotron">
					<label>Nombre de Tienda</label>
					<input type="text" name="tienda" placeholder="Nombre de la tienda" required="required"><br><br>
					<label>Usuario</label>
					<input type="text" name="usuario" placeholder="Nombre del usuario" required="required"><br><br>
					<label>Contraseña</label>
					<input type="password" name="clave1" placeholder="Ingrese una Contraseña" required="required"><br><br>
					<label>Repita la Contraseña</label>
					<input type="password" name="clave2" placeholder="Ingrese de nuevo la Contraseña" required="required"><br><br>

				<button type="submit" >Registrar</button>
				</div>
			</form>
		</center>
	</body>
</html>