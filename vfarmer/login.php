<?php

    //Connection to database
    require_once 'connection/db_connect.php';

    //check errors
    $errors = ['email' => '', 'password' => ''];

    $email = '';
    $password = '';
    $incorrect = '';
    

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

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

        //check no more errors
        if(!array_filter($errors)){

          //hash password
          $password = md5($password); 

            //check if email and password exists in the database
            $sql = 'SELECT * FROM farmer WHERE email = :email AND password = :password LIMIT 1';
            $statement = $conn->prepare($sql);
            $statement->execute([
              ':email' => $email,
              ':password' => $password,
            ]);

            $user = $statement->fetch();

            if($statement->rowCount()){

              $_SESSION['user'] = $user;
              header('Location: dashboard.php');

            }
            else{
              $incorrect = 'Email or Password is incorrect';
            }

        }

    }

    if(isset($_SESSION['user'])){
      header('Location: dashboard.php');
    }


?>


<!doctype html>
<html lang="en">
  <head>
    <title>VFarmer Login</title>
    <link rel="icon" type="image/png" href="images/icon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body class="login-page">


    <div class="login-button">
        <div class="container p-5">
            <img src="images/logo.png" class="img-fluid">

            <form action="login.php" method="POST">

                <div class="text-danger text-center">
                  <?php echo $incorrect ?>
                </div>

                <div class="mb-3 mt-3">
                  <label class="form-label">Email address</label>
                  <input type="text" class="form-control" name="email" placeholder="Email">
                  <div class="text-danger mt-1">
                    <?php echo $errors['email']; ?>
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                  <div class="text-danger mt-1">
                    <?php echo $errors['password']; ?>
                  </div>
                </div>

                <!-- <a class="btn btn-primary myLogin-button" href="dashboard.php" role="button">Sign In</a> -->
                <button type="submit" class="btn btn-primary myLogin-button">Sign In</button>
            </form>

            <div class="form-info text-center">
                <div class="container"> 
                    <p class="mt-5 mb-1">Need an Account? <span><a href="register.php">Sign Up</a></span></p>
                    <p class="last">Go Home <span><a href="../index.html">Here</a></span></p>
                </div>
            </div>
        </div>
    </div>
   


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>