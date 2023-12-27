<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "demodb";

$conn = mysqli_connect( $servername, $username, $password, $db);

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}

$sql = "CREATE TABLE visitors(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    phonenumber VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($conn,$sql)){
    echo"Table created successfully";
}else{
    echo "Failed to create demoDB ".mysqli_error($conn);
}

mysqli_close($conn);

?>