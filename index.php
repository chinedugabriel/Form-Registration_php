<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="reg.css">
    <title>Reg_form</title>
</head>
<body class="bg-white position-relative" onload="hideSuccesAlert()">
    <section>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-6 d-flex flex-row justify-content-center align-items-center">
                    <form action="insert_db.php" method="post" class="text-success border border-success p-3 mt-5 d-flex flex-column justify-content-around " >
                        <div class="row mb-3">
                            <div class="col-md-12 text-center">
                                <h2>Registration Form</h2>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="">
                                    First Name:
                                </label>
                                <input type="text" name="firstname" id="" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">
                                    Last Name:
                                </label>
                                <input type="text" name="lastname" id="" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="">
                                    Phone Number:
                                </label>
                                <input type="tel" name="phonenumber" id="" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="">
                                    Email:
                                </label>
                                <input type="email" name="email" id="" class="form-control" required>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-6">
                                <input type="submit" value="Submit" name="submit" class="btn btn-success">
                            </div>
                            <div class="col-md-6 text-end">
                                <button type="button" class="btn btn-outline-success" onclick="document.location = 'http\://localhost/php_projects/registration-form/view_list.php';">
                                    View List
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 bg-img vh-95 p-3">
                    <img src="img/greenSit under constrction.png" alt="" class="img-fluid">
                </div>
            </div>
            
        </div>
    </section>

    <?php

        if(isset($_SESSION['addedToDB'])){
            if ($_SESSION['addedToDB'] == "successful"){
                echo '    
                <div class="success-alert position-absolute"  id="success-alert" >
                    <p class="p-2 text-center border rounded-2 bg-success text-white">Added Successfully</p>
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