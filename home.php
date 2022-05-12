<?php SESSION_START();
    error_reporting(0);
    include 'config.php';
    $userprofile = $_SESSION['user_email'];
    if($userprofile==true){

    }else{
        header('location:index.php');
    }
    $sql = "SELECT * FROM users_signup WHERE email = '$userprofile' ";
    $data = mysqli_query($conn, $sql);
    $result=mysqli_fetch_assoc($data);
    
?>
<script> alert("Welcome to SpotKart- Online shopping website!!") </script>

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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="becomeseller.php" target="_blank">Become a Seller</a>
                    </li>
                   
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

                    <li class="nav-item">
                        <a class="nav-link" href="/cart.html">My Cart</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </form>
                    <!-- <input class="btn btn-warning"></input> -->
                    <button class=" btn-dark mx-2" style="color:#ffc107;">
                    <?php
                        echo "Welcome ".$result['username'];
                    ?>
                    </button>
                    <a class="btn btn-warning" href="logout.php" role="button">LogOut</a>
                </div>
            </div>
        </div>
    </nav>

        <!-- carousel  -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/electronics.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to Spotkart</h2>
                    <p>Shop your favourite electronic gadgets.</p>
                    <button class="btn btn-dark">Laptops</button>
                    <button class="btn btn-dark">Mobiles</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/man.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to Spotkart</h2>
                    <p>Shop your favourite Clothing, footwear, etc.</p>
                    <button class="btn btn-dark">Man clothing</button>
                    <button class="btn btn-dark">Footwear</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/woman.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to Spotkart</h2>
                    <p>Shop your favourite Clothing, footwear, jewellery, etc.</p>
                    <button class="btn btn-dark">Jewellery</button>
                    <button class="btn btn-dark">Footwear</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <!-- cards  -->
    <h3 class="category-type">Summer 22' Essential</h3>
<center>
    <div class="cantainer-cards my-5 ">
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img1.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">Min. 70% Off</h5>
                <p class="card-text">For Extra Comfort</p>
                <a href="#" class="btn btn-warning">Kids' Shorts</a>
            </div>
        </div>
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img2.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">Min.60% Off</h5>
                <p class="card-text">Fresh juice</p>
                <a href="#" class="btn btn-warning">Hand Juicers</a>
            </div>
        </div>
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img3.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">Min.70% Off</h5>
                <p class="card-text">Stay Cool in Summers</p>
                <a href="#" class="btn btn-warning">Caps</a>
            </div>
        </div>
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img4.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mini.40% Off</h5>
                <p class="card-text">Fresh Juice, Shake</p>
                <a href="#" class="btn btn-warning">Mixer Juicer Grinder</a>
            </div>
        </div>
    </div>
</center>

<h3 class="category-type">Top Picks On Man's Clothing</h3>
<center>
    <div class="cantainer-cards  my-4 mx-5 ">
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img5.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">Min 50% Off</h5>
                <p class="card-text">Not to be missed!</p>
                <a href="#" class="btn btn-warning">Denim Shirts</a>
            </div>
        </div>
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img6.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">Min 60% Off</h5>
                <p class="card-text">T-shirts, Jeans...</p>
                <a href="#" class="btn btn-warning">Roadster, HRX, Wrogn...</a>
            </div>
        </div>
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img7.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">Under ₹399</h5>
                <p class="card-text">For 18 years old</p>
                <a href="#" class="btn btn-warning">Men's T-Shirts</a>
            </div>
        </div>
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img8.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">Min 50% Off</h5>
                <p class="card-text">Best value for money</p>
                <a href="#" class="btn btn-warning">Cargo Pants</a>
            </div>
        </div>
    </div>
</center>

<h3 class="category-type">Top Styles On Discount</h3>
<center>
    <div class="cantainer-cards  my-4 mx-5 ">
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img13.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">From ₹599</h5>
                <p class="card-text">Biba, Nayo & more</p>
                <a href="#" class="btn btn-warning">Kurta With Churidar Sets</a>
            </div>
        </div>
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img14.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">From ₹499</h5>
                <p class="card-text">Alena, Yufta & more</p>
                <a href="#" class="btn btn-warning">Kurta With Jacket</a>
            </div>
        </div>
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img16.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">Min 40% Off</h5>
                <p class="card-text">Embroidered </p>
                <a href="#" class="btn btn-warning">Gowns</a>
            </div>
        </div>
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img15.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">From ₹599 </h5>
                <p class="card-text">Jaipur Kurti, Idalia</p>
                <a href="#" class="btn btn-warning">Kurta & Pant Sets</a>
            </div>
        </div>
    </div>
</center>

<h3 class="category-type">Best of Electronics</h3>
<center>
    <div class="cantainer-cards  my-4 mx-5 ">
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img9.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">From ₹3,999</h5>
                <p class="card-text">DSLRs, Action, Digital &...</p>
                <a href="#" class="btn btn-warning">Top 20 Cameras</a>
            </div>
        </div>
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img10.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">Just ₹22,900</h5>
                <p class="card-text">Keyboard | 25.65 cm (10...</p>
                <a href="#" class="btn btn-warning">Lenovo Ideapad D330</a>
            </div>
        </div>
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img11.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">From ₹799</h5>
                <p class="card-text">Mi, Netgear, TP-Link</p>
                <a href="#" class="btn btn-warning">Routers</a>
            </div>
        </div>
        <div class="allcards" class="card" style="width: 18rem;">
            <img src="images/card-img12.jpg" class="card-img-top card-imgage" alt="...">
            <div class="card-body">
                <h5 class="card-title">Shop Now</h5>
                <p class="card-text">for all phone models</p>
                <a href="#" class="btn btn-warning">Best Brands</a>
            </div>
        </div>
    </div>
</center>

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