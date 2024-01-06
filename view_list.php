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
<body >
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
                                                   
                                                        <button type='button' class='btn btn-sm btn-warning edith-form' name=".$row["id"]." >Edith</button>
                                                    
                                                    </td>
                                                    <td>
                                                        <a href='delete_data.php?id=".$row["id"]."' class='btn btn-sm btn-danger'>Delete</a>
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

    <section id="section2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action='edith_data.php' method='post' class='text-success border border-success p-3 d-flex flex-column justify-content-around ' >
                    <div class='row mb-3'>
                        <div class='col-md-12 text-center'>
                            <h2>Registration Form</h2>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <div class='col-md-2'>
                            <label for=''>
                                Id:
                            </label>
                            <input type='text' name="id" id='tableId' class='form-control' required>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <div class='col-md-6'>
                            <label for=''>
                                First Name:
                            </label>
                            <input type='text' name='firstname' class='form-control' required>
                        </div>
                        <div class='col-md-6'>
                            <label for=''>
                                Last Name:
                            </label>
                            <input type='text' name='lastname' id='' class='form-control' required>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <div class='col-md-12'>
                            <label for=''>
                                Phone Number:
                            </label>
                            <input type='tel' name='phonenumber' id='' class='form-control' required>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <div class='col-md-12'>
                            <label for=''>
                                Email:
                            </label>
                            <input type='email' name='email' id='' class='form-control' required>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <input type='submit' value='Save' name='submit' class='btn btn-success'>
                            <!-- <a href='http://http://localhost/projects/Form-Registration_php/edith_data.php' class='btn btn-success'></a> -->
                        </div>
                        <div class='col-md-6 text-end'>
                            <button type='button' class='btn btn-outline-success' id ='close-form'>
                                close
                            </button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="list.js"></script>
</body>
</html>

<?php 
    mysqli_close($conn);
?>