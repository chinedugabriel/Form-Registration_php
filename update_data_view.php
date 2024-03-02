<?php

$id = $_GET['id'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$phonenumber =  $_GET['phonenumber'] ;
$email = $_GET['email'];
 
    

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

<section id="section2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action='edith_data.php' method='post' class='text-success border border-success p-3 d-flex flex-column justify-content-around ' >
                    <div class='row mb-3'>
                        <div class='col-md-12 text-center'>
                            <h2>Update Registration details</h2>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <div class='col-md-2'>
                            <label for=''>
                                Id:
                            </label>
                            <input type='text' name="id" id='tableId' class='form-control' value="<?php echo $id;?>" >
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <div class='col-md-6'>
                            <label for=''>
                                First Name:
                            </label>
                            <input type='text' name='firstname' value="<?php echo $firstname; ?>" class='form-control' required>
                        </div>
                        <div class='col-md-6'>
                            <label for=''>
                                Last Name:
                            </label>
                            <input type='text' name='lastname' value="<?php echo $lastname;?>" class='form-control' required>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <div class='col-md-12'>
                            <label for=''>
                                Phone Number:
                            </label>
                            <input type='tel' name='phonenumber' value="<?php echo $phonenumber ;?>" class='form-control' required>
                        </div>
                    </div>
                    <div class='row mb-3'>
                        <div class='col-md-12'>
                            <label for=''>
                                Email:
                            </label>
                            <input type='email' name='email' value="<?php echo $email ; ?>" class='form-control' required>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-6'>
                            <button type="button" class="btn btn-outline-success " onclick="document.location = document.referrer;">
                                 << Back
                            </button>

                        </div>
                        <div class='col-md-6 text-end'>
                            <input type='submit' value='Save' name='submit' class='btn btn-success'>

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

