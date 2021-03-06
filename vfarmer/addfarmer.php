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
    <?php include_once 'views/header.php' ?>
    <!-- End Header -->

    <!-- Dashboard Content -->
    <div class="farmer-content-section p-5">
        <div class="container foodcrops">

            <div class="card border-0">
                <img src="images/cucumber.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h3 class="card-title">Cucumber</h3>
                  <h4 class="card-text mt-3">Unit Farm Price: GH₵ 100</h4>
                  <p class="card-text mt-4">Cucumber is a succulent vegetable with a good source of fibre, particular in the skin. It has wonderful health benefits where it helps in weight loss and also stabilizes blood pressure. The good thing about this wonderful vegetable is that its demand is very high which knocks off the ideas of whether you would be able to sell it. The farming period for cucumber allows for land preparation, growing and transplanting seedlings, harvesting and packaging before sales to off-takers.</p>
                  <p class="card-text mt-4" style="color: red;">Farm Start: 2020-11-03 | Farm Duration: 6 months</p>
                  
                  <a href="#">
                    <button type="button" class="btn btn-outline-warning btn-lg mt-4"><i class="fas fa-shopping-cart"></i>&nbsp; Add to Cart</button>
                  </a>
                  
                  <div class="card mt-5 mb-5 units">
                    <div class="card-body">
                        There are <span class="fw-bold" style="color: #062c33;">0</span> units left!
                    </div>
                  </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Dashboard Content -->

    <!-- Dashboard Content -->
    <div class="farmer-content-section p-5">
        <div class="container foodcrops">

            <div class="card border-0">
                <img src="images/tomatoes.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                  <h3 class="card-title">Tomatoes</h3>
                  <h4 class="card-text mt-3">Unit Farm Price: GH₵ 300</h4>
                  <p class="card-text mt-4">The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as a tomato plant. The species originated in western South America and Central America. ... While tomatoes are fruits—botanically classified as berries—they are commonly used as a vegetable ingredient or side dish.</p>
                  <p class="card-text mt-4" style="color: red;">Farm Start: 2020-08-31 | Farm Duration: 6 months</p>
                  
                  <a href="#">
                    <button type="button" class="btn btn-outline-warning btn-lg mt-4"><i class="fas fa-shopping-cart"></i>&nbsp; Add to Cart</button>
                  </a>
                  
                  <div class="card mt-5 mb-5 units">
                    <div class="card-body">
                        There are <span class="fw-bold" style="color: #062c33;">50</span> units left!
                    </div>
                  </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Dashboard Content -->

    <div class="addfarm-footer text-center mt-5 mb-5">
        <p class="small">Copyright © 2020 FullStalk Limited. All rights reserved.</p>
    </div>

    

   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>