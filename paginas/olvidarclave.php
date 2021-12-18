<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olvide mi password</title>
    <link rel="stylesheet" href="../estilo/estiloEntradaDatos.css">
    <?php include '../scripts/baseDeDatos/funcionesBD.php';
    include '../scripts/funciones/funciones.php'; ?>
</head>

<body>
    <header>
        <div id="logoRedHat">
            <img src="../imagenes/logoRedHat.png" alt="Logo Red Hat">
        </div>
        <a href="login.php" title="Haz click aquí si quieres iniciar sesión" class="enlaceCabecera">Iniciar Sesión</a>
    </header>
    <main>
        <section class="titulo">
            <h2>¿Has olvidado tu contraseña?</h2>
        </section>
        <section class="formulario">
            <div class="infoMensaje">
                <p>Te enviaremos un enlace para que restablezcas la contraseña. Se enviará a la cuenta de correo electrónico que utilizaste durante el registro.
                    Por favor, introduce dicho correo.
                </p>
                <p>Asegúrate de comprobar tu carpeta de correo no deseado también.
                </p>
            </div>

            <form id="recordarClave" name="recordarClave" action="../scripts/respuestas/respuestaRegistro.php" method="POST" enctype="multipart/form-data">

                <input type="email" name="mail" id="mail" placeholder="Introduce tu correo" minlength="11" maxlength="40" pattern="[a-ZA-Z0-9.-_]*+@gmail.com]{11,40}" size="50" list="defaultEmails" title="Por favor, solo proporciona una dirección de correo que finalice con: @gmail.com" autocomplete="on" required>
                <br>

                <input type="submit" value="Enviar Correo" name="enviar">
        </section>
        <section class="regresoPrincipal">
            <a href="../index.html">
                Regresar a la pagina principal
                <img src="../imagenes/flechaAtras.png" alt="flecha hacia atrás" id="flechaAtras">
            </a>
        </section>

        <!-- <?php
                $mail = variableVacia('mail');
                $mail = limpiarCadenas($mail, 11, 40);
                enviarMail($mail);
                ?> -->
    </main>

    <footer>
        <div id="infoPieDePagina">
            h4>Acerca de la pagina</h4>
            <h4>Equuipo 5 del 4CV3 Curso de Tecnologias para desarrollo de aplicasiones web</h4>
            <h4>Esta es una pagina creada para un proyecto escolar y no tiene relacion alguna con la empresa Red Hat</h4>
            <p>Esta pagina fue elaborada por alumnos de la
                <a href="https://www.escom.ipn.mx/" target="_blank" title="ESCOM" id="ESCOM">
                    <abbr title="Escuela Superior de Cómputo">ESCOM</abbr>
                </a>
            </p>
        </div>
    </footer>

</body>

</html>