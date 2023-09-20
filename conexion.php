<?php
    //Este es el archivo de la conexión a la base de datos
    $link = @mysqli_connect("localhost","root","") or die("conex");
    @mysqli_select_db($link,"tienda") or die("DB");
?>