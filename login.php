<?php
// Establece la conexión con la base de datos (ajusta los valores según tu configuración)
$host = "localhost";
$usuario = "root";
$contrasena = "kamc123456";
$base_datos = "consultorio_jhermoza";

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Recibe los datos del inicio de sesión desde la aplicación
$correo1= $_POST['correo'];
$contra1 = $_POST['contraseña'];

// Consulta para verificar las credenciales del usuario
$my_query = "SELECT * FROM vw_lista_usuario WHERE correo= '$correo1' AND contraseña = '$contra1'";
$result = mysqli_query($conexion,$my_query);
$response = array();

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $response = $row;
    }
    echo json_encode($response);
}
else
{
    $arr =array("errorcode" => "1111","message"=> "Email and password no encontrados");
    echo json_encode($arr);
}
?>