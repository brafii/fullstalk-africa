<?php

    //Connection to database
    require_once 'connection/db_connect.php';

    //check errors
    $errors = ['fullname' => '', 'email' => '', 'password' => '', 'country' => '', 'city' => '', 'contact' => '', 'address' => ''];

    $fullname = '';
    $email = '';
    $password = '';
    $country = '';
    $city = '';
    $contact = '';
    $address = '';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(empty($fullname)){
            $errors['fullname'] = 'Fullname is required';
        }
        else{
            $fullname = $_POST['fullname'];
        }

        if(empty($email)){
            $errors['email'] = 'Email is required';
        }
        else{
            $email = $_POST['email'];
        }

        if(empty($password)){
            $errors['password'] = 'Password is required';
        }
        else{
            $password = $_POST['password'];
        }

        if(empty($country)){
            $errors['country'] = 'Country is required';
        }
        else{
            $country = $_POST['country'];
        }

        if(empty($city)){
            $errors['city'] = 'City is required';
        }
        else{
            $city = $_POST['city'];
        }

        if(empty($contact)){
            $errors['contact'] = 'Contact is required';
        }
        else{
            $contact = $_POST['contact'];
        }

        if(empty($address)){
            $errors['address'] = 'Address is required';
        }
        else{
            $address = $_POST['address'];
        }

        print_r($errors);

    }


?>


<!doctype html>
<html lang="en">
  <head>
    <title>VFarmer Signup</title>
    <link rel="icon" type="image/png" href="images/icon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="login-page">


    <div class="register-page">
        <div class="container p-5">
            <img src="images/logo.png" class="img-fluid">
            <form action="register.php" method="POST">
                
                <div class="mb-3">
                    <label for="formFile" class="form-label">Profile</label>
                    <input class="form-control" name="profile" type="file" id="formFile">
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Full Name">
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Email Address</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="Country">
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" name="city" placeholder="City">
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Contact</label>
                    <input type="text" class="form-control" name="contact" placeholder="Contact">
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="terms" class="form-check-input">
                    <label class="form-check-label">Agree the terms and policy</label>
                </div>
                
                <button type="submit" class="btn btn-primary myRegister-button">Register</button>
            </form>

            <div class="form-info text-center">
                <div class="container"> 
                    <p class="mt-5 mb-1">Already have account? <span><a href="login.php">Sign In</a></span></p>
                    <p class="last">Go Home <span><a href="../index.html">Here</a></span></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="register-footer p-5 text-center">
        <p>Copyright &copy 2020 Becham Foods. All rights reserved. Template by Brafii.</p>
    </div>
    <!-- End Footer -->
   


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>