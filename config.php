<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "rg";

$con = mysqli_connect($host, $user, $password, $database);

if(!$con){
    die("Connection Error".mysqli_connect());
}
// else{
//     echo "Connected Successfully";
// }



?>