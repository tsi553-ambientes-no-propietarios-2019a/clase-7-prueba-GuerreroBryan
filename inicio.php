<?php
include('php/connection.php');

		$sql = ("SELECT idUsuario FROM tienda");
		$sql1 = ("SELECT nomTienda FROM tienda");
		// Show used memory
		$result = mysqli_query($conn, $sql);
		$result1 = mysqli_query($conn, $sql1);
		echo $result1->fetch_object()->nomTienda. "<br>";
		echo "BIENVENIDO"." " .$result->fetch_object()->idUsuario;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
    <center>
        <h2>Productos</h2>

        
        <table border="1">
		<tr>
			<tH>Codigo</tH>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Stock</th>
			<th>Precio</th>
		</tr>

		<?php
			$sqlquery = "SELECT * FROM producto";
			$res = $conn->query($sqlquery);
			while ($mostrar = $res->fetch_assoc()) {
			
		?>
		<tr>
            <td><?php echo $mostrar['codigo']?></td>
			<td><?php echo $mostrar['nombre']?></td>
			<td><?php echo $mostrar['tipo']?></td>
			<td><?php echo $mostrar['stock']?></td>
			<td><?php echo $mostrar['precio']?></td>
		</tr>

		<?php
			}
		?>
            
	</table>
        <br>
        <a href="registroProducto.php">Ingresar Nuevo Producto</a>
        <a href="index.php">Salir</a>
    </center>
	
</body>
</html>