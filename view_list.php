<?php
    session_start();
?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "demodb";
    
    $conn = mysqli_connect($servername,$username,$password,$database_name);

    if(!$conn){
        die("failed to connect to server".mysqli_connect_errno($conn));
    }

    $sql = "SELECT * FROM visitors";
    // $sql = "SELECT * FROM visitors WHERE id = 9";
    $result = mysqli_query($conn, $sql);


 
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="reg.css">
    <title>View list</title>
</head>
<body class="position-relative vh-100" onload="hideSuccesAlert()">
    <section id="section1">
        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="row my-3">
                        <div class="col-md-12 text-center text-success">
                            <h2>
                                Customer Table
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <form action="delete_data.php" method="get"> -->
                                <table class="table table-striped border border-success">
                                    <thead class="text-white bg-success">
                                        <th>#</th>
                                        <th>
                                            First Name
                                        </th>
                                        <th>
                                            Last Name
                                        </th>
                                        <th>
                                            Phone Number
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Registration Date
                                        </th>
                                        <th>
                                            Update
                                        </th>
                                        <th>
                                            Remove
                                        </th>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        
                                        if (mysqli_num_rows($result)>0){
                                            // output the data of each row
                                            while($row = mysqli_fetch_assoc($result)){
                                                echo "
                                                <tr>
                                                    <td>"
                                                        . $row['id'] .
                                                    "</td>
                                                    <td>" 
                                                        .$row['firstname'] .
                                                    "</td>
                                                    <td>" 
                                                        .$row['lastname'].
                                                    "</td>
                                                    <td>"
                                                        .$row['phonenumber'].
                                                    "</td>
                                                    <td>"
                                                        .$row['email'].
                                                    "</td>
                                                    <td>"
                                                        .$row['reg_date'].
                                                    "</td>
                                                    <td>
                                                   
                                                        <a href='update_data_view.php?id=".$row['id']."&firstname=".$row['firstname']."&lastname=".$row['lastname']."&phonenumber=".$row['phonenumber']."&email=".$row['email']."' class='btn btn-sm btn-warning'>Edith</a>
                                                    </td>
                                                    <td>
                                                        <a href='delete_data.php?id=".$row['id']."' class='btn btn-sm btn-danger'>Delete</a>
                                                    </td>
                                                </tr>";
                                            }
                                        }else{
                                            echo "0 results";
                                        }
    
                                        ?>
                                    </tbody>
                                </table>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 bg-img vh-100 p-3">
                    <img src="hertleys.png" alt="" class="img-fluid">
                </div> -->
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex flex-row justify-content-between ">
                    <button type="button" class="btn btn-outline-success " onclick="document.location = 'http:/\/localhost/php_projects/registration-form/';">
                        << Back
                    </button>
                    <button type="button" class="btn btn-outline-success" onclick="document.location = 'http:/\/localhost/php_projects/registration-form/';">
                        Add+
                    </button>
                </div>
            </div>
        </div>

        
    </section>
    
<?php


// this checks if the session for updated isset, it echo's an alert message responding if the data was successfully update in the database
if(isset($_SESSION['updated'])){
    if ($_SESSION['updated'] == "successful"){
        echo '    
        <div class="success-alert position-absolute"  id="success-alert" >
        <p class="p-2 text-center border rounded-2 bg-success text-white">Updated Successfully</p>
    </div>
        ';

        session_unset();
        session_destroy();
    }
}

// this checks if the session for deleted isset, it echo's an alert message if the record was deleted from the database
if(isset($_SESSION['deleted'])){
    if ($_SESSION['deleted'] == "successful"){
        echo '    
        <div class="success-alert position-absolute"  id="success-alert" >
            <p class="p-2 text-center border rounded-2 bg-danger text-white">Deleted Successfully</p>
        </div>
        ';

        session_unset();
        session_destroy();
    }
}

?>

    
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="list.js"></script>
</body>
</html>

<?php 
    mysqli_close($conn);
?>