<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=M+PLUS+Rounded+1c:wght@500&family=Oxygen&family=Pacifico&family=Ubuntu+Mono:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/contacto.css">
    <title>Contacto</title>
</head>

<body>
    <div class="contenedor">
        <header class="header">
            <div class="titulo">
            <img src="../Imagenes/Photoshop/Azteca.png" alt="Cultura Azteca">
                <h1>Cultura Azteca</h1>
                <img src="../Imagenes/Photoshop/Practico 18 Titulo.png" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="../index.html">Inicio</a></li>
                    <li><a href="Contacto.html">Datos de Contacto</a></li>
                    <li><a href="Ubicacion.html">Mapa de ubicación</a></li>
                </ul>
            </div>
        </header>

        <main class="contenido">
            <h1>Contacto</h1>
            <p>
                Esta página fue realizada por <b>Guevara Flores Jorge</b>, con las tecnologías de <b>HTML5, JavaScript,
                    CSS y PHP</b>. Mostrando las prácticas que se han realizado durante este semestre en Photoshop, cabe
                recalcar que las prácticas 10 y 15 son personales, debido que no se ajustaban a la temática de la
                página. <br><br>
                Si quieres tener contacto directo conmigo, llena el siguiente formulario y lo más pronto posible me
                pondré en contacto contigo. <br><br>
            </p>

            <form id="formulario" name="formulario" method="post" action="../php/correo.php""  >
                <h1 id="titulo_formulario">Contacto para trabajo</h1>
                <input type="text" name="nombre" placeholder="Nombre" id="nombre" maxlength="20">
                <input type="text" name="ap" placeholder="Apellido Paterno" id="ap" maxlength="20">
                <input type="text" name="am" placeholder="Apellido Materno" id="am" maxlength="20">
                <input type="email" name="correo" placeholder="Correo" id="correo" maxlength="50">
                <input type="tel" name="telefono" placeholder="Teléfono 55-55-55-55-55" id="telefono" maxlength="10"
                    minlength="10" pattern="[0-9]+">
                <textarea name="mensaje" placeholder="Escriba aqui su mensaje" id="mensaje"></textarea>
                <input type="submit" value="Enviar" id="btn-enviar">
            </form>

            <br><br>
            <p style="text-align: center;"><b>Sigueme en:</b></p> <br><br>

            <div class="redesSociales">
                <a href="https://www.facebook.com/jorge.guevara.35977" target="_blank">
                    <center><img src="../Imagenes/Redes Sociales/facebook.png" alt="Facebook"></center>
                </a>
            </div>
        </main>
        <aside class="sidebar">
            <h1 class="photoshop">Prácticas de Photoshop</h1>
            <ul class="practicas">
                <li><a href="Practica 1.html">Practica 1</a></li>
                <li><a href="Practica 2.html">Practica 2</a></li>
                <li><a href="Practica 3 y 8.html">Practica 3</a></li>
                <li><a href="Practica 4.html">Practica 4</a></li>
                <li><a href="Practica 5.html">Practica 5</a></li>
                <li><a href="Practica 6.html">Practica 6</a></li>
                <li><a href="Practica 7.html">Practica 7</a></li>
                <li><a href="Practica 3 y 8.html">Practica 8</a></li>
                <li><a href="Practica 9.html">Practica 9</a></li>
                <li><a href="Practica 10.html">Practica 10</a></li>
                <li><a href="Practica 11.html">Practica 11</a></li>
                <li><a href="Practica 12.html">Practica 12</a></li>
                <li><a href="Practica 13.html">Practica 13</a></li>
                <li><a href="Practica 14.html">Practica 14</a></li>
                <li><a href="Practica 15.html">Practica 15</a></li>
                <li><a href="Practica 16.html">Practica 16</a></li>
                <li><a href="Practica 17.html">Practica 17</a></li>
                <li><a href="Practica 18.html">Practica 18</a></li>
            </ul>
        </aside>
        <footer class="footer">
            <h3>&#9400 Jorge Guevara Flores</h3>
            <img src="../Imagenes/unam.png" alt="UNAM">
        </footer>
    </div>

    <script src="../javascript/formulario.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>