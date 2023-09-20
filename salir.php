<?php
    require "protec.php";
    // session_destroy() destruye las tokens de sesion
    session_destroy();
    header("location: index.php?op=SALIO");
?>