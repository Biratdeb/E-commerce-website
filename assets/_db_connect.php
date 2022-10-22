<?php 
$hostname = "localhost";
$username ="root";
$password = "";
$database = "ecom-web";

$conn = mysqli_connect($hostname, $username, $password, $database);
if(!$conn){
    echo "cannot connected with the database".mysqli_connect_error();
}





?>