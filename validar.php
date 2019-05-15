<?php
include('php/connection.php');

	$clave1 = $_POST['clave1'];
	$clave2 = $_POST['clave2'];

	if ($clave1==$clave2) {
		if ($_POST) {
		if (isset($_POST['tienda'])&&isset($_POST['usuario'])&&isset($_POST['clave1'])&&!empty($_POST['tienda'])&&!empty($_POST['usuario'])&&!empty($_POST['clave1'])) {
			$ntienda = $_POST['tienda'];
			$nusuario = $_POST['usuario'];
			$nclave = $_POST['clave1'];
			$sqlinsert = "INSERT INTO tienda(nomTienda, idUsuario, idClave) VALUES ('$ntienda', '$nusuario', '$nclave')";
			$res = $conn->query($sqlinsert);
			if ($conn->error) {
				header('Location: nuevo.php?message_error=Error en la insercion'.$conn->error);
			}else{
				//echo 'Registro correcto!';
			}
		}else{
			header('Location: nuevo.php?message_error=Llene todos los campos');
		}
	}
}elseif ($clave1!=$clave2) {
	header('Location: registroTienda.php?message_error=Las contraseñas no coinciden'.$conn->error);
}
		


?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Registro Exitoso</title>
</head>
<body>
	<center>
		<h1>Sus datos han sido registrados correctamente puede acceder al inicio</h1>
		<a href="index.php">INICIO</a>
	</center>
</body>
</html>
