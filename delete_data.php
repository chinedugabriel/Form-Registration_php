<?php

session_start();

?>

<?php
// this file s used to delete data from the database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demodb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection Failed". mysqli_connect_error());
}



$id_row = $_GET['id'];
        


$sql= "DELETE FROM visitors WHERE ID='$id_row'";

if(mysqli_query($conn,$sql)){
    // echo "data removed from list Successfully";

    // redirects the user to view_list page
    header('location: http://localhost/php_projects/registration-form/view_list.php');

    $_SESSION['deleted'] = 'successful';

}else{
    echo"failed to remove data from list".mysqli_error($conn);
}


mysqli_close($conn);
 

?>