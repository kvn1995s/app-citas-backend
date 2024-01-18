<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    require_once("db.php");
    $dniPaciente = $_GET['dniPaciente'];

    $query = "SELECT * FROM cita WHERE dniPaciente= '$dniPaciente'";
    $resul = $mysql->query($query);
     $array = array();

    if($mysql->affected_rows > 0){
        while($row = $resul->fetch_assoc()){
            $array = $row;
        }
        echo json_encode($array);

    }else{
        echo"not found any rows";
    }

    $resul->close();
    $mysql->close();
}
?>