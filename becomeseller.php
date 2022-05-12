

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Become a Seller</title>
    <link rel="shortcut icon" href="images/fevicon.jpg" type="image/x-icon">
</head>

<body>
    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!--style="background-color:rgb(10, 242, 176);"-->
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="color: #ffc107;"><strong>SpotKart</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="becomeseller.php">Become a Seller</a>
                    </li>
                   
                    <li class="nav-item dropdown" style="z-index:3;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Man Cothing</a></li>
                            <li><a class="dropdown-item" href="#">Woman Clothing</a></li>
                            <li><a class="dropdown-item" href="#">Kids Wear</a></li>
                            <li><a class="dropdown-item" href="#">Jewellery</a></li>
                            <li><a class="dropdown-item" href="#">Footwear</a></li>
                            <li><a class="dropdown-item" href="#">Electronics</a></li>
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li> -->
                            <li><a class="dropdown-item" href="#">Grocery</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="cart.html">My Cart</a>
                    </li>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>

    <!-- form strts here -->
    <div class="background">
    <img class="background" src="bg.jpeg" alt="">
    <div class="container-bs">
        <h1><u><strong>Please fill the details for the further process</strong></u></h1>
        <p class="det">Please enter your details and submit to confirm</p>
       

        <form class="seller-form" action="becomeseller.php" method="post">
            <input class="input-bs" type="text" name="name" id="name" placeholder="Enter your name" required><br>
            <input class="input-bs" type="text" name="age" id="age" placeholder="Enter your age" required><br>
            <input class="input-bs" type="text" name="gender" id="gender" placeholder="Enter your gender" required><br>
            <input class="input-bs" type="email" name="email" id="email" placeholder="Enter your email" required><br>
            <input class="input-bs" type="number" name="phone" id="phone" placeholder="Enter your phone" required><br>

            <input class="input-bs" type="text" name="prod_category" id="prod_category" placeholder="Enter your Product Category" required><br>
            <input class="input-bs" type="text" name="address" id="address" placeholder="Enter your Address" required><br>
            <input class="input-bs" type="number" name="pin_code" id="pin_code" placeholder="Enter your Area Pin-Code" required><br>

            <textarea class="input-bs" name="desc" id="desc" cols="30" rows="10" placeholder="Any suggestion for us"></textarea><br>
            <center>
            <input type="submit" class="button">
            <input type="reset" class="button"></center>
        </form>
    </div>
    </div>

    <!-- footer  -->
    <div class="footer_">
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <!-- <div class="col-12 col-md">
            <img class="mb-2" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
            <small class="d-block mb-3 text-muted">© 2017–2021</small>
          </div> -->
          <div class="col-6 col-md mx-5">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Contact Us</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">About Us</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Careers</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Spotkart Stories</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Press</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Spotkart</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Wholesale</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Corporate</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Help</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Payments</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Shipping</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cancellation</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Return</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">FAQ</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Report</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Infringement</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Policy</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Return Policy</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms Of Use</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Security</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Sitemap</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">ERP Compliance</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Social</h5>
            <ul class="list-unstyled text-small">
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Facebook</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Twitter</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">YouTube</a></li>
              <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Instagram</a></li>
            </ul>
          </div>
        </div>
      </footer>
      <hr>
<center><p class="lastline">This website is for use only in India || Designed & Developed by Himanshu Kumar || Copyright 2022</p>
</div>
</body>
</html>


<!-- php code to connect database -->

<?php 
    
        include 'config.php';
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $prod_category = $_POST['prod_category'];
        $address = $_POST['address'];
        $pin = $_POST['pin_code'];
        $desc = $_POST['desc'];


        $sql = "INSERT INTO `become_seller` (`name`, `age`, `gender`, `email`, `phone`, `prod_category`, `address`, `pin_code`, `suggestion`, `datetime`) VALUES ($name, $age, $gender, $email, $phone, $prod_category, $address, $pin, $desc, current_timestamp());";
        // echo $sql;

        if ($conn->query($sql) == true){
            echo "Submitted successfullly!!";
            //<p class="submitmsg">Thanks for submitting your details and we are happy to see you joining us.</p> 
        }
        else{
            echo "ERROR: $sql <br> $conn->error";
        }
        $conn->close();
    
?>