<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    require_once("db.php");
    $correoPaciente = $_GET['correoPaciente'];

    $query = "SELECT * FROM paciente WHERE correoPaciente= '$correoPaciente'";
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