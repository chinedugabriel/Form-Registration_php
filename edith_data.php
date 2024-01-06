<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "demodb";
    
    $conn = mysqli_connect($servername,$username,$password,$database_name);

    if(!$conn){
        die("failed to connect to server".mysqli_connect_errno($conn));
    }



    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    if(!$conn){
        die("Connection failed".mysqli_connect_error());
    }

    $sql = "UPDATE visitors SET firstname='$firstname', lastname='$lastname', email='$email' WHERE id='$id'";

    if(mysqli_query($conn,$sql)){
        echo "data Update from list Successfully";
        echo "<script>setTimeout(()=>{document.location = document.referrer;},2000);</script>";
    }else{
        echo"failed to update data from list".mysqli_error($conn);
    }
    

 
    
    mysqli_close($conn);

?>