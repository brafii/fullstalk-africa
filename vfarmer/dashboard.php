<!doctype html>
<html lang="en">
  <head>
    <title>VFarmer Dashboard</title>
    <link rel="icon" type="image/png" href="images/icon.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  </head>
  <body>
    
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="images/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fab fa-pagelines"></i>&nbsp; Farms
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-shopping-basket"></i>&nbsp; Cart (0)</a>
            </li>
            
          </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
            <li class="nav-item dropdown imagedropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img class="rounded-circle my-image" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(30).jpg">&nbsp; Mary Osei
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>

          </ul>
        </div>

      </div>
    </nav>
    <!-- End Header -->

    <!-- Dashboard Content -->
    <div class="full-content-section p-5">
        <div class="container">

            <div class="display-name">
                <h2>Good day, Farmer Fiifi Ofori!</h2>
                <hr>
            </div>

            <div class="content-card mt-5">
              
              <div class="row">

                <div class="col-md">
                  
                  <div class="card card1">
                    <div class="card-body">
                      <h1>0</h1>
                      <p>farms</p>
                    </div>
                  </div>
                  
                </div>
                <div class="col-md">
                  
                  <div class="card card2">
                    <div class="card-body">
                      <h1>0</h1>
                      <p>farms</p>
                    </div>
                  </div>

                </div>
                <div class="col-md">
                  
                  <div class="card card3">
                    <div class="card-body">
                      <h1>0</h1>
                      <p>farms</p>
                    </div>
                  </div>

                </div>
                <div class="col-md">
                 
                  <div class="card card4">
                    <div class="card-body">
                      <h1>0</h1>
                      <p>farms</p>
                    </div>
                  </div>

                </div>

              </div>
            
            </div>

            <!-- title tag -->
            <h4 class="mt-5">New Farms</h4>
            <!-- End title tag -->

            <!-- Farm button -->
            <div class="farmbutton text-end">
              <a class="btn btn-primary mt-5" href="addfarmer.html" role="button"><i class="fas fa-plus"></i> ADD FARM</a>
            </div>
            <!-- End Farm button -->

            <!-- table chart -->
            <div class="table-chart mt-5">

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col"><input type="checkbox" class="form-check-input" id="exampleCheck1"></th>
                    <th scope="col">Crop Name</th>
                    <th scope="col">Total Units</th>
                    <th scope="col">Units Available</th>
                    <th scope="col">Price Per Unit</th>
                    <th scope="col">Status</th>
                    <th scope="col">Start Date</th>
                  </tr>
                </thead>
                <tbody>

                  <tr class="give-space">
                    <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td>Cucumber</td>
                    <td><span class="total-units">50</span></td>
                    <td>0</td>
                    <td>GH₵ 100</td>
                    <td><span class="status">Sold out!</span></td>
                    <td>2020-11-03</td>
                  </tr>

                  <tr>
                    <td><input type="checkbox" class="form-check-input" id="exampleCheck1"></td>
                    <td>Tomatoes</td>
                    <td><span class="total-units">50</span></td>
                    <td>50</td>
                    <td>GH₵ 300</td>
                    <td><span class="status">Open</span></td>
                    <td>2020-08-31</td>
                  </tr>
                  
                </tbody>
              </table>

            </div>
            <!-- end table chart -->

            <div class="dashboard-footer text-center mt-5">
              <p>Copyright &copy 2020 FullStalk Limited. All rights reserved.</p>
            </div>

        </div>
    </div>
    <!-- End Dashboard Content -->

    

   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>