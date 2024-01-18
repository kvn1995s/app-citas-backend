<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    require_once("db.php");

    $correoPaciente = $_POST['correoPaciente'];
    $contraseñaPaciente = $_POST['contraseñaPaciente'];
    $nombresPaciente = $_POST['nombresPaciente'];
    $apellidoPaternoP = $_POST['apellidoPaternoP'];
    $apellidoMaternoP = $_POST['apellidoMaternoP'];
    $dniPaciente = $_POST['dniPaciente'];
    $direccionPaciente = $_POST['direccionPaciente'];
    $telefonoPaciente = $_POST['telefonoPaciente'];     
    $sexo = $_POST['sexo'];    
    $fechNacimientoP= $_POST['fechNacimientoP'];      
    $distritoPaciente = $_POST['distritoPaciente'];    

    $query = "INSERT INTO paciente (correoPaciente, contraseñaPaciente , nombresPaciente , apellidoPaternoP ,apellidoMaternoP,dniPaciente,direccionPaciente,telefonoPaciente,sexo,fechNacimientoP,distritoPaciente) VALUES ('$correoPaciente','$contraseñaPaciente' , '$nombresPaciente' ,'$apellidoPaternoP' ,'$apellidoMaternoP','$dniPaciente','$direccionPaciente','$telefonoPaciente','$sexo','$fechNacimientoP','$distritoPaciente')";
    
    $result = $mysql->query($query);

    if($result==TRUE){
        echo "Paciente agregado correctamente";
    }else{
        echo "Error";
    }
    $mysql->close();
}
?>