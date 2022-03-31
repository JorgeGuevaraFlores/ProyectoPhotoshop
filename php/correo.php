<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php

    // conectar a BD
    //$conexion = mysqli_connect("localhost","root","","photoshop") or die ("Error de conexión");
    $conexion = mysqli_connect("localhost","id18707198_root","GUEVARAjor2@@","id18707198_photoshop") or die ("Error de conexión");

    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['ap'];
    $apellidoMaterno = $_POST['am'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $insert = mysqli_query($conexion, "INSERT INTO clientes (correo, nombre, apellidoPaterno, apellidoMaterno, telefono, mensaje) 
    VALUES ('$correo','$nombre','$apellidoPaterno','$apellidoMaterno','$telefono','$mensaje')") or die ("problemas al insertar");

    if($insert){
        $asunto = "DATOS DE CONTACTO PARA LA ADQUISICION DE SERVICIOS";
        $header = "Enviado desde la página de Photoshop de Jorge Guevara Flores.";
        $mensajeCompleto = "Hola que tal Sr. o Sra. " . $nombre . " " . $apellidoPaterno . " " . $apellidoMaterno . " , hemos recibido su petición. Se ha registrado en nuestra base de datos y pronto será atendida." . "\n\n" . "Atentamente: Guevara Flores Jorge" . "\n\n\n" . "Sigueme en Facebook: https://www.facebook.com/jorge.guevara.35977";
        
        $enviado = mail($correo, $asunto, $mensajeCompleto, $header);

        if($enviado){
            echo "<script>
            Swal.fire({
                title: 'Enviado!',
                text: 'Los datos se han enviado correctamente!',
                icon: 'success',
                confirmButtonText: 'ok!',
                confirmButtonColor: '#0bae00'
              }).then((result) => {
                if (result.isConfirmed) {
                    location.href = '../index.html';
                }
              });
            </script>";
        }
    }

    // echo "registro completo";

    mysqli_close($conexion);
?>


</body>
</html>

