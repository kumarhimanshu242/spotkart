<?php error_reporting (E_ALL ^ E_NOTICE);

require_once "config.php";

if(isset($_SESSION['user_id'])!="") {
   header("Location: dashboard.php");
}
if (isset($_POST['create_acc'])) {
    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
   
    $cpassword = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    

    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $email_error = "Please Enter Valid Email ID";
    }
    
    if(empty(trim($_POST['password'])))
    {
        echo '<script> alert("Password can not be blank") </script>';
        $password_err = "Password can not be blank";
    }
    elseif (strlen(trim($_POST['password']))<5)
    {
        echo '<script> alert("Password con not be less than 5 characters") </script>';
        $password_err = "Password con not be less than 5 characters";
    }
    else
    {
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    }
    if (trim($_POST['password'])!=trim($_POST['confirm_password']))
    {
        echo '<script> alert("Password did not match") </script>';
        $password_err = "Password did not match";
    }

    // $param_password = password_hash($password, PASSWORD_DEFAULT);

    if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){

        if(mysqli_query($conn, "INSERT INTO users_signup(`username`, `email`, `password`, `datetime`) VALUES('" . $name . "', '" . $email . "', '" . $password . "',  current_timestamp())")) {
        header("location: login.php");
        exit();
        } else {
        echo "Error: ". mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}

?>

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
    <title>Shop online with Spotkart</title>
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
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="becomeseller.php" target="_blank">Become a Seller</a>
                    </li> -->
                   
                    <li class="nav-item dropdown" style="z-index:2;">
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

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/cart.html">My Cart</a>
                    </li> -->
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form> -->
                <div class="mx-2">
                    <a class="btn btn-warning" href="login.php" role="button">Login</a>
                    <!-- <a class="btn btn-warning" href="signup.php" role="button">Sign Up</a> -->
                    <!-- <button class="btn btn-warning">Login</button>
                    <button class="btn btn-warning">Sign Up</button> -->
                </div>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2>Sign Up to SpotKart</h2>
        <hr>
        <form action="" method="post">
                
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword" required>
            </div>

            <!-- <div class="mb-3">
                <label for="cexampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="cexampleInputPassword1">
            </div> -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Agree to Terms & Conditions</label>
            </div>
            
            <input type="submit" class="btn btn-warning" name="create_acc" value="Create Account">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>

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
</body>

</html>