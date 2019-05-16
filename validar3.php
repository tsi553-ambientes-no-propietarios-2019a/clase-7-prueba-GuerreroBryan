<?php 
include('php/connection.php');
if($_POST) {
	if (isset($_POST['codigo']) && isset($_POST['producto']) && isset($_POST['seleccion']) && isset($_POST['precio']) && isset($_POST['cantidad']) 
        && !empty($_POST['codigo']) && !empty($_POST['producto']) && !empty($_POST['seleccion']) && !empty($_POST['precio']) && !empty($_POST['cantidad'])) {
            $codigo = $_POST['codigo'];
            $producto = $_POST['producto'];
            $seleccion = $_POST['seleccion'];
            echo $seleccion;
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];

        
            $sql_insert = "INSERT INTO producto(codigo, producto, tipo, stock, precio) VALUES ('$codigo','$producto','$seleccion','$cantidad','$precio')";
		    echo $sql_insert;
		    $conn->query($sql_insert);
		    if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		    } else {
                echo'<script type="text/javascript"> alert("Tarea Guardada");</script>';
			    header('Location: registroProducto.php');
            }
    
	} else {
		header('Location: registroProducto.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: registroProducto.php');
	exit;
}
?>