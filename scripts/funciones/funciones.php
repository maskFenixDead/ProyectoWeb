<?php 
    //Remueve etiquetas html que hayan tratado de ser insertadas
    //Quita los espacios en blanco del principio y el final
    //Corta la cadena, dejando la longitud maxima marcada en el index
    //Quita los caracteres "/"
    //los caracteres especiales de html  los convierte a caracteres
    function limpiarCadenas($input,$minlong,$maxlong){ 
            $input = strip_tags($input);        
            $input = trim($input);
            $input = substr($input,0,$maxlong);
            $input = stripslashes($input);
            $input = htmlspecialchars_decode($input,ENT_COMPAT); 
            if (strlen($input)<$minlong){
                return NULL;
            }
            return $input;       
    }

    /* 
    Esta funcion me permite saber si al momento de enviar los datos del formulario, algun campo esta vacío, además de que me 
    permite evitar que arroje un error en la pagina y de información sobre el nombre de las variables. 
    */
    function variableVacia($variable){
        $mensajeVacio = NULL;
        if (isset($_POST[$variable])) {
            if (!empty($_POST[$variable])) {
                $nombreVariable = $_POST[$variable];
                return $nombreVariable;
            }else{
                return $mensajeVacio;
            }           
        }
    }
    
    //Esta función me ayuda a obtener el nombre de una variable, por ejemplo, si mi variable es:
    //$pais = "Mexico";
    //obtenerNombreVariable($pais); me regresa "pais"
    function obtenerNombreVariable($var) {
        foreach($GLOBALS as $varName => $value) {
            if ($value === $var) {
                return $varName;
            }
        }
        return;
    }

?>