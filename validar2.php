<?php
include('php/connection.php');
if ($_POST) {
		if (isset($_POST['user'])&&isset($_POST['pass'])&&!empty($_POST['user'])&&!empty($_POST['pass'])) {
			$nusuario = $_POST['user'];
			$nclave = $_POST['pass'];
    		$sqlselect =  "SELECT * FROM `tienda` WHERE `idUsuario` = '$nusuario'";
    		$res = $conn->query($sqlselect);
			if ($conn->error) {
				header('Location: nuevo.php?message_error=Error en la insercion'.$conn->error);
			}else{
				//echo 'Registro correcto!';
			}
		}else{
			header('Location: nuevo.php?message_error=Llene todos los campos');
		}
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
		<a href="inicio.php">INICIO</a>
	</center>
</body>
</html>