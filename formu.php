<?php
$nombre = $_POST['nombre'];
$password= $_POST['password'];
$email = $_POST['email'];

if(!empty($nombre) &!empty($password)&!empty($email)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "estudiante";

    $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
   
}
?>