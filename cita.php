<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    require_once("db.php");

    $tratamiento = $_POST['tratamiento'];
    $idMedico = $_POST['idMedico'];    
    $idPaciente  = $_POST['idPaciente'];
    $dniPaciente= $_POST['dniPaciente'];
    $nomMed= $_POST['nomMed'];
    $fechaCita = $_POST['fechaCita'];
    $horaCita = $_POST['horaCita'];  
    $estadoCita= $_POST['estadoCita'];    
  

    $query = "INSERT INTO cita (tratamiento, idMedico , idPaciente,dniPaciente,nomMed,fechaCita,horaCita,estadoCita) VALUES ('$tratamiento','$idMedico' , '$idPaciente' ,'$dniPaciente','$nomMed','$fechaCita','$horaCita','$estadoCita')";
    
    $result = $mysql->query($query);

    if($result==TRUE){
        echo "cita registrada correctamente";
    }else{
        echo "Error";
    }
    $mysql->close();
}
?>