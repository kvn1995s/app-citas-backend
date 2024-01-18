<?php
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASS', 'kamc123456');
 define('DB_NAME', 'consultorio_jhermoza');
 
 //connecting to database and getting the connection object
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$query="SELECT *FROM vw_lista_usuario";
$result=mysqli_query($conn,$query);
$rows=array();
while($row=mysqli_fetch_assoc($result)){
    array_push($rows,array('Id'=>$row['id'],  
                          'correo'=>$row['correo'],                          
                          'contraseña'=>$row['contraseña'],                          
                          'userType'=>$row['userType']));
}
echo json_encode($rows);
mysqli_close($conn);
?>