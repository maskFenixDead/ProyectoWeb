<?php
    function conectarBD(){
        $conectar = mysqli_connect("localhost","root","root", "registrousuario") or die("Ocurrió un fallo en la conexión: " . mysqli_connect_error());
        return $conectar;
    }

    function conectarMail(){
        
    }

    function selectALL($tabla){
        $conexion = conectarBD();
        $consulta = "SELECT * FROM $tabla";
        $resultado = mysqli_query($conexion,$consulta);
        while ($fila = mysqli_fetch_assoc($resultado)) {
            foreach ($fila as $key => $value) {
                if ($key != "id") {
                    echo "<p>Su $key es: $value </p>";
                }
            }
        }
        mysqli_close($conexion);
    }

    function insertTabla($tabla, $registro){
        $conexion = conectarBD();
        
        $llaves = array_keys($registro);
        $valores = array_values($registro);
        $llave = "";
        $valor = "";

        $query1 = "INSERT INTO $tabla (";
        
        for ($i=0; $i < count($llaves); $i++) {
            if ($i==count($llaves)-1) {
                $llave = $llave."$llaves[$i]";
            }else{
                $llave = $llave."$llaves[$i]".",";
            } 
        }
        
        $query2= ") VALUES (";
        
        for ($i=0; $i < count($valores); $i++) {
            if ($i==count($valores)-1) {
                $valor = $valor."'$valores[$i]'";
            }else{
                $valor = $valor."'$valores[$i]'".",";
            } 
        }         
        
        $query3 =")";
        
        $query = $query1.$llave.$query2.$valor.$query3;
        
        mysqli_query($conexion, $query);
        
        mysqli_close($conexion);
    }

    function enviarMail($correo){
        $mensaje = "Hola, tu contraseña es: ";
        $mensaje = wordwrap($mensaje, 70, "\r\n");
        // Enviarlo
        mail($correo, 'Recueración de contraseña', $mensaje);
    }



?>