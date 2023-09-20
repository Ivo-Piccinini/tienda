<?php
    // session_start sirve para preservar o crear los datos de sesión (hay que ponerlo al principio)
    session_start();

    if (isset($_POST["usuario"]) and isset($_POST["password"])) {
        $usuario = trim(strtolower($_POST["usuario"]));
        $password = $_POST["password"];

        // include sirve para usar el código de un archivo en otro
        // require sirve para lo mismo que include pero si encuentra un error frena la ejecución
        require "conexion.php";
        // La consulta dice: seleccionar todo de la tabla usuarios donde usuario sea igual a nuestra
        //variable usuario y password sea igual a nuestra variable password. Limit 1 es para que nos
        //devuelva un solo resultado como máximo.
        $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password' LIMIT 1";
        $rec = mysqli_query($link,$sql);

        // esta funcion cuenta la cantidad de resultados de rec
        if (mysqli_num_rows($rec)) {
            // mysqli_fetch_array toma toda la info de rec y la pone en un array
            $usr = mysqli_fetch_array($rec);
            if ($usr["estado"] == 1) {
                // aca creamos 3 variables de sesion para guardarlas en la sesión
                $_SESSION["usuario_id"] = $usr["usuario_id"];
                $_SESSION["usuario"] = $usr["usuario"];
                $_SESSION["rol_id"] = $usr["rol_id"];
                // esto es para actualizar el último login
                $sql="UPDATE usuarios SET ult_login=NOW() WHERE usuario_id=".$usr["usuario_id"];"";
                mysqli_query($link,$sql);

                header("location:catalogo.php");    
            } else {
                header("location:index.php?op=INACTIVO");
            }
        } else {
            header("location:index.php?op=ERROR");
        }
        exit();
    }

    header("location:index.php");
?>