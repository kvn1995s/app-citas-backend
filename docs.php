<?php
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASS', 'kamc123456');
 define('DB_NAME', 'consultorio_jhermoza');
 
 //connecting to database and getting the connection object
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$query="SELECT *FROM medico";
$result=mysqli_query($conn,$query);
$rows=array();
while($row=mysqli_fetch_assoc($result)){
    array_push($rows,array('Id'=>$row['idMedico'],  
                          'Nombre'=>$row['nomMed'],
                          'ApellidoPaterno'=>$row['apellidoPaternoM'],
                          'ApellidoMaterno'=>$row['apellidoMaternoM'],
                          'Dni'=>$row['dniMe'],
                          'Correo'=>$row['correoMed'],                            
                          'Estado'=>$row['estadoMe'],
                          'CMP'=>$row['cmpMedico']));
}
echo json_encode($rows);
mysqli_close($conn);
?>