<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Respuesta registro</title>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=FtyZIMNfydk8882nDB_LV3R3GaWNGeWY5tFqZrYDhwzHMwGkHJiEHcuFcodthLJaT9RLqwFhgjAtnwcaPszlS_WdAo7HFuHg7CN6u61ZTVQFNxWIl5e31DO5TEkpdb0mloxot7M-RUdiyXN94NK8QpUocN0Wl_YEWBOagAlX0B3E2_r-WpkaWwtwTqDuIx-sDqBOzqKqO5UhBYskQSghsFoodKgAMSme-4x7AQAc8Ex6N3EWb5w7RveGahG2TJstu253LRkn8Y6TS2yt34WF7Xv1xAhXpyNzRoCcg22jPYEyPg0yXBjoTB_hMZFCB1q6CDiHP6jtKa98E-qpHkCwuw" charset="UTF-8"></script><?php include '../funciones/funciones.php';
    include '../baseDeDatos/funcionesBD.php';    
    ?>
</head>
<body>
    <h1>La pagina que responde</h1>
    <?php         
       
        $email = variableVacia('email');
        $email = limpiarCadenas($email,6,60);
        $clave = variableVacia('clave');
        $clave = limpiarCadenas($clave,4,25);

        $registro = [
            "email" => $email,
            "password" => $clave
        ];

        
        insertTabla("usuarios",$registro);
        
        selectALL("usuarios");  
    
    ?>

</body>
</html>