<?php
    include('php/connection.php');
    session_start();
    
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave1'];
    $q= "SELECT COUNT(*) as contar from tienda where idUsuario = '$usuario' and idClave = '$clave'"; 
    $consulta = mysqli_query($conn,$q);
    $array=mysqli_fetch_array($consulta);
    var_dump($consulta);
    if($array['contar'] > 0)
    {
        $_SESSION['username'] = $usuario;
        header("location: inicio.php");
    }
    else
    {
        echo "datos incorrectos";
    }
?>