<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect( $servername, $username, $password);

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}

$sql = "CREATE DATABASE demoDB";

if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}else{
    echo "Failed to create demoDB ".mysqli_errno($conn);
}

mysqli_close($conn);

?>