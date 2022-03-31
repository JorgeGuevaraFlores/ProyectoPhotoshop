<?php

    // conectar a BD
    $conexion = mysqli_connect("localhost","root","","photoshop") or die ("Error de conexión");

    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['ap'];
    $apellidoMaterno = $_POST['am'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $insert = mysqli_query($conexion, "INSERT INTO clientes (correo, nombre, apellidoPaterno, apellidoMaterno, telefono, mensaje) 
    VALUES ('$correo','$nombre','$apellidoPaterno','$apellidoMaterno','$telefono','$mensaje')") or die ("problemas al insertar");

    if($insert){
        $asunto = "Datos de contacto para la adquisición de servicios";
        $header = "Enviado desde la página de Photoshop de Guevara Flores Jorge.";
        $mensajeCompleto = "Hola que tal " . $nombre . $apellidoPaterno . $apellidoMaterno . " hemos recibido tu petición, se ha registrado en nuestra base de datos y pronto será atendida." . "\n\n" . "Atentamente: Guevara Flores Jorge";
        
        $enviado = mail($correo, $asunto, $mensajeCompleto, $header);

        if($enviado){
            echo "<script>alert('Verifica tu correo')</script>";
        }
    }

    echo "registro completo";

    mysqli_close($conexion);
?>