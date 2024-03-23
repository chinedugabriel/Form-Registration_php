<?php
    session_start();

?>
<?php


function validate_form($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}


if ($_SERVER["REQUEST_METHOD"]=='POST'){
    $first_name = validate_form($_POST['firstname']);
    $last_name = validate_form($_POST['lastname']);
    $phone_number =  validate_form($_POST['phonenumber']) ;
    $email = validate_form($_POST['email']);
}

$servername = "localhost";
$username = "root";
$password = "";
$db = "demodb";

$conn = mysqli_connect( $servername, $username, $password, $db);

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}

$sql = "INSERT INTO visitors(firstname,lastname,phonenumber,email)
VALUE('$first_name','$last_name','$phone_number','$email');
";



if (mysqli_query($conn,$sql)){
    // echo "Added data Successfully ";
    
    // redirects the user to home page
    header('location: http://localhost/php_projects/registration-form/index.php');

    $_SESSION['addedToDB'] = "successful";
}else{
    echo "Failed to add data ".mysqli_error($conn);
}

mysqli_close($conn);

?>  