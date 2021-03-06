<?php

    //Connection to database
    require_once 'connection/db_connect.php';

    //check errors
    $errors = ['fullname' => '', 'email' => '', 'password' => '', 'country' => '', 'city' => '', 'contact' => '', 'address' => '', 'terms' => ''];

    $fullname = '';
    $email = '';
    $password = '';
    $country = '';
    $city = '';
    $contact = '';
    $address = '';
    $terms = '';


    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        //check if firstname is empty
        if(empty($_POST['fullname'])){
            $errors['fullname'] = 'Fullname is required';
        }
        else{
            $fullname = htmlspecialchars($_POST['fullname']);
        }

        //check if email is empty
        if(empty($_POST['email'])){
            $errors['email'] = 'Email is required';
        }
        else{
            $email = htmlspecialchars($_POST['email']);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Please provide a valid email';
            }
        }

        //check if password is empty
        if(empty($_POST['password'])){
            $errors['password'] = 'Password is required';
        }
        else{
            $password = $_POST['password'];
        }

        //check if country is empty
        if(empty($_POST['country'])){
            $errors['country'] = 'Country is required';
        }
        else{
            $country = $_POST['country'];
        }

        //check if city is empty
        if(empty($_POST['city'])){
            $errors['city'] = 'City is required';
        }
        else{
            $city = $_POST['city'];
        }

        //check if contact is empty
        if(empty($_POST['contact'])){
            $errors['contact'] = 'Contact is required';
        }
        else{
            $contact = $_POST['contact'];
        }

        //check if address is empty
        if(empty($_POST['address'])){
            $errors['address'] = 'Address is required';
        }
        else{
            $address = $_POST['address'];
        }

        //check if terms is empty
        if(empty($_POST['terms'])){
            $errors['terms'] = 'Terms is required';
        }
        else{
            $address = $_POST['terms'];
        }


        //check no more errors
        if(!array_filter($errors)){


            //check if email exiits
            $sql = 'SELECT * FROM farmer WHERE email = :email LIMIT 1';
            $statement = $conn->prepare($sql);
            $statement->execute([
                ':email' => $email,
            ]);
            if($statement->rowCount()){
                $errors['email'] = 'Email already exists';
            }
            else{

                if(!is_dir('profileimages')){
                    mkdir('profileimages');
                }

                $image = $_FILES['image'] ?? null;
                $imagePath = '';
                if($image && $image['tmp_name']){

                    $imagePath = 'profileimages/'.randomString(8).'/'.$image['name'];
                    mkdir(dirname($imagePath));

                    move_uploaded_file($image['tmp_name'], $imagePath);
                }

                //hash password
                $password = md5($password);

                //save data into database
                $sql = 'INSERT INTO farmer (image, fullname, email, password, country, city, contact, address, terms) VALUE(:image, :fullname, :email, :password, :country, :city, :contact, :address, :terms)';
                $statement = $conn->prepare($sql);
                $statement->execute([
                    ':image' => $imagePath,
                    ':fullname' => $fullname,
                    ':email' => $email,
                    ':password' => $password,
                    ':country' => $country,
                    ':city' => $city,
                    ':contact' => $contact,
                    ':address' => $address,
                    ':terms' => $terms
                ]);

                $lastId = $conn->lastInsertId();

                $sql = 'SELECT * FROM farmer WHERE id=:id';
                $statement = $conn->prepare($sql);
                $run = $statement->execute([':id' => $lastId]);
                $user = $statement->fetch();

                if($run){
                    $_SESSION['user'] = $user;
                    header('Location: dashboard.php');
                }


            }

        }

    }

    if(isset($_SESSION['user'])){
        header('Location: dashboard.php');
    }

    function randomString($n){

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';

        for($i = 0; $i < $n; $i++){
            $index = rand(0, strlen($characters) - 1);
            $str .= $characters[$index];
        }

        return $str;

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

            <form action="" method="POST" enctype="multipart/form-data">
                
                <div class="mb-3">
                    <label for="formFile" class="form-label">Profile</label>
                    <input class="form-control" name="image" type="file" id="formFile">
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="fullname" value="<?php echo $fullname ?>" placeholder="Fullname">
                    <div class="text-danger mt-1">
                        <?php echo $errors['fullname']; ?>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Email Address</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>" placeholder="Email">
                    <div class="text-danger mt-1">
                        <?php echo $errors['email']; ?>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                    <p  class="mt-1" id="message">Password is <span id="strength"></span> </p>
                    <div class="text-danger mt-1">
                        <?php echo $errors['password']; ?>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Country</label>
                    <input type="text" class="form-control" name="country" value="<?php echo $country ?>" placeholder="Country">
                    <div class="text-danger mt-1">
                        <?php echo $errors['country']; ?>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" name="city" value="<?php echo $city ?>" placeholder="City">
                    <div class="text-danger mt-1">
                        <?php echo $errors['city']; ?>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Contact</label>
                    <input type="text" class="form-control" name="contact" value="<?php echo $contact ?>" placeholder="Contact">
                    <div class="text-danger mt-1">
                        <?php echo $errors['contact']; ?>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $address ?>" placeholder="Address">
                    <div class="text-danger mt-1">
                        <?php echo $errors['address']; ?>
                    </div>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="terms" value="Agreed" class="form-check-input">
                    <label class="form-check-label">Agree the terms and policy</label>
                    <div class="text-danger mt-1">
                        <?php echo $errors['terms']; ?>
                    </div>
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
    <script src="js/myscript.js"></script>
  </body>
</html>