<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../estilo/estiloEntradaDatos.css">
</head>

<body>
    <header>
        <div id="logoRedHat">
            <img src="../imagenes/logoRedHat.png" alt="Logo Red Hat">
        </div>
        <a href="./InicioSesion.php" title="Haz click aquí si quieres iniciar sesión" class="enlaceCabecera">Inicia Sesión</a>
    </header>

    <main>
        <section class="titulo">
            <h2>Registro de usuario</h2>
        </section>
        <section class="formulario">
            <form id="registroUsuario" name="registroUsuario" action="./php/respuesta/respuestaRegistro.php" method="POST" enctype="multipart/form-data">
                <input type="email" name="email" id="email" placeholder="Introduce tu correo" minlength="6" maxlength="60" pattern="[a-ZA-Z0-9.-_]*+@gmail.com]{11,40}" size="80" title="Por favor, solo proporciona una dirección de correo que finalice con: @gmail.com" autocomplete="on" required>
                <br>

                <label for="clave">Introduce tu contraseña:</label>
                <input type="password" name="clave" id="clave" placeholder="Introduce tu contraseña" minlength="4" maxlength="25" pattern="[0-9A-Za-z-_*]{4,30}" title="Debe al menos tener 4 caracteres, ya sean numeros, letras o los caracteres especiales -, _, *" autocomplete="on" required>
                <br>

                <label for="confirmarclave">Introduce de nuevo la contraseña:</label>
                <input type="password" name="confirmarclave" id="confirmarclave" placeholder="Introduce nuevamente tu contraseña" minlength="4" maxlength="25" pattern="[0-9A-Za-z-_*]{4,30}" title="Debe al menos tener 4 caracteres, ya sean numeros, letras o los caracteres especiales -, _, *" autocomplete="on" required>
                <br>

                <input type="submit" value="Enviar Datos" name="enviar">

        </section>
        <section class="regresoPrincipal">
            <a href="../index.html">
                Regresar a la pagina principal
                <img src="../imagenes/flechaAtras.png" alt="flecha hacia atrás" id="flechaAtras">
            </a>
        </section>
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