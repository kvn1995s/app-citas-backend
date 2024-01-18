<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    require_once("db.php");

    $correoMed = $_POST['correoMed'];
    $contraseñaMed = $_POST['contraseñaMed'];
    $nomMed = $_POST['nomMed'];
    $apellidoPaternoM = $_POST['apellidoPaternoM'];
    $apellidoMaternoM = $_POST['apellidoMaternoM'];
    $dniMe = $_POST['dniMe'];
    $direccionMe = $_POST['direccionMe'];
    $cmpMedico = $_POST['cmpMedico'];      

    $query = "INSERT INTO medico (correoMed, contraseñaMed , nomMed , apellidoPaternoM ,apellidoMaternoM,dniMe,direccionMe,cmpMedico) VALUES ('$correoMed','$contraseñaMed','$nomMed','$apellidoPaternoM','$apellidoMaternoM','$dniMe','$direccionMe','$cmpMedico')";
    
    $result = $mysql->query($query);

    if($result==TRUE){
        echo "El Medico se ha agregado correctamente";
    }else{
        echo "Error";
    }
    $mysql->close();
}
?>