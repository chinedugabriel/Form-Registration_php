<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "demodb";
    
    $conn = mysqli_connect($servername,$username,$password,$database_name);

    if(!$conn){
        die("failed to connect to server".mysqli_connect_errno($conn));
    }



    function validate_form($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    
        return $data;
    }
    
    
    if ($_SERVER["REQUEST_METHOD"]=='POST'){
        $id = validate_form($_POST['id']);
        $first_name = validate_form($_POST['firstname']);
        $last_name = validate_form($_POST['lastname']);
        $phone_number =  validate_form($_POST['phonenumber']) ;
        $email = validate_form($_POST['email']);
    }

    if(!$conn){
        die("Connection failed".mysqli_connect_error());
    }

    $sql = "UPDATE visitors SET firstname='$first_name', lastname='$last_name', phonenumber='$phone_number', email='$email' WHERE id='$id'";

    if(mysqli_query($conn,$sql)){
        echo "data Update from list Successfully";
        // echo "<script>setTimeout(()=>{document.location = document.referrer;},2000);</script>";
        echo "<script>setTimeout(()=>{document.location = 'http://localhost/php_projects/registration-form/view_list.php';},1000);</script>";
    }else{
        echo"failed to update data from list".mysqli_error($conn);
    }
    

 
    
    mysqli_close($conn);

?>