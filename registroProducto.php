



<!DOCTYPE html>
<html>
	<head>
		<title>Registro Producto</title>
	</head>
	<body>
		<center>
			<h2>Registro de Producto</h2>
			<form action="validar.php" method="POST" >
				<div class="jumbotron">
					
					<input type="text" name="codigo" placeholder="Ingrese un codigo"><br><br>
					
					<input type="text" name="nombre" placeholder="Nombre del producto" required="required"><br><br>

					<select name="select">
					  <option value="Alimento">Alimento</option> 
					  <option value="Vestimenta" selected>Vestimenta</option>
					  <option value="Salud">Salud</option>

					</select>

					<br>
					
					<input type="password" name="clave2" placeholder="Ingrese de nuevo la Contraseña" required="required"><br><br>

				<button type="submit" >Registrar</button>
				</div>
			</form>
		</center>
	</body>
</html>