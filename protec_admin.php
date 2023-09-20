<?php
    if($_SESSION["rol_id"] != 1){
        header("location: index.php?op=PROHIBIDO");
        exit();
    }
?>