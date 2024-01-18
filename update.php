<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    require_once("db.php");

    $correoMed = $_POST['correoMed'];
    $contraseñaMed = $_POST['contraseñaMed'];
    $nomMed = $_POST['nomMed'];
    $apellidoPaternoM = $_POST['apellidoPaternoM'];
    $apellidoMaternoM = $_POST['apellidoMaternoM'];    
    $direccionMe = $_POST['direccionMe'];
    $cmpMedico = $_POST['cmpMedico'];      

    $query = "UPDATE medico SET contraseñaMed = '$contraseñaMed',nomMed= '$nomMed',apellidoPaternoM= '$apellidoPaternoM',apellidoMaternoM= '$apellidoMaternoM',direccionMe= '$direccionMe',cmpMedico= '$cmpMedico'";
    $result = $mysql->query($query);

    if($mysql->affected_rows > 0){
        if ($result === TRUE){
            echo "update exitoso";
        }else{
            echo "Error";
        }

    }else{
        echo "No se encontro medico";
    }
    $mysql->close();
}
?> 
