<?php 
include('php/connection.php');
if($_POST) {
	if (isset($_POST['usuario']) && isset($_POST['clave1']) && !empty($_POST['usuario']) && !empty($_POST['clave1'])) {
		$tienda = $_POST['tienda'];
        $usuario = $_POST['usuario'];
        $clave1 = $_POST['clave1'];
        $clave2 = $_POST['clave2'];
        
        
        if($clave1 == $clave2)
        {
            $sql_insert = "INSERT INTO tienda(nombTienda, idUsuario, IdClave) VALUES ('$tienda','$usuario','$clave1')";
		    echo $sql_insert;
		    $conn->query($sql_insert);
		    if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		    } else {
                echo'<script type="text/javascript"> alert("Tarea Guardada");</script>';
			    header('Location: index.php');
            }
        }
        else
        {
           header('Location: registroTienda.php?error_message=Contraseñas incorrectas!');
		    exit; 
        }
	} else {
		header('Location: registroTienda.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: registroTienda.php');
	exit;
}
?>