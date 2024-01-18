<?php

    $mysql = new mysqli(
        "localhost",
        "root",
        "kamc123456",
        "consultorio_jhermoza"
    );
    if($mysql->connect_error){
        die("Failed to connect" . $mysql->connect_error);
    }
    ?>
