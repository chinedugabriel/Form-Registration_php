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
    $result = mysqli_query($conn, $sql);


    // if(isset($_POST['remove'])){
        function removeItem($id){
            global $conn;
            
            $id = $_POST["$id"];
            $sql = "DELETE FROM visitors WHere id = $id";
            if(mysqli_query($conn,$sql)){
                echo "record removed Successfully";
            }else{
                echo "failed to remove record".mysqli_error($conn);
            }
        }
    // }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>View list</title>
</head>
<body>
    <section>
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
                                                    <button type='submit' name=".$row['id']." class='btn btn-sm btn-danger' onclick='<php echo removeItem(".$row['id'].") ?>'>Edith</button>
                                                </td>
                                                <td>
                                                    <button type='submit' name=".$row['id']." class='btn btn-sm btn-danger' onclick='<php echo removeItem(".$row['id'].") ?>'>Delete</button>
                                                </td>
                                            </tr>";
                                        }
                                    }else{
                                        echo "0 results";
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6 bg-img vh-100 p-3">
                    <img src="hertleys.png" alt="" class="img-fluid">
                </div> -->
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 d-flex flex-row justify-content-between ">
                    <button type="button" class="btn btn-outline-success " onclick="document.location = document.referrer;">
                        << Back
                    </button>
                    <button type="button" class="btn btn-outline-success" onclick="document.location = 'http\://localhost/php_projects/registration-form/index.html'">
                        Add+
                    </button>
                </div>
            </div>
        </div>
    </section>
    
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>

<?php 
    mysqli_close($conn);
?>