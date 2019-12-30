<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <span> <?php include 'signup.php';?> </span>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Car<span>Book</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="car.html" class="nav-link">Cars</a></li>
              <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            <li class="nav-item active"><a href="signup.html" class="nav-link">Sign Up</a></li>
            <li class="nav-item"><a href="login.html" class="nav-link">Log In</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/c/ce/20140622-Anthoupoli-62D304_%287872%29.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Sign Up <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Sign Up</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      
        <div class="container">
          <div class="row d-flex mb-5 contact-info">
            
            <div class="col-sm-4 block-1 mb-md-3 container">
              <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-user-circle"></i> </span>
                      </div>
                      <input name="username" class="form-control" placeholder="Όνομα Χρήστη" type="text">
                      <span class="error"> <?php echo $username_err;?></span>
                      
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-user"></i> </span>
                      </div>
                      <input name="first_name" class="form-control" placeholder="Όνομα" type="text" >
                      <span class="error"> <?php echo $first_name_err;?></span>
                      
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-user"></i> </span>
                      </div>
                      <input name="last_name" class="form-control" placeholder="Επίθετο" type="text" >
                      <span class="error"> <?php echo $last_name_err;?></span>
                      
                  </div> <!-- form-group// -->
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-envelope-o"></i> </span>
                      </div>
                      <input name="email" class="form-control" placeholder="Email" type="email">
                      <span class="error"> <?php echo $email_err;?></span>
                      
                  </div> <!-- form-group// -->
                
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-calendar"></i> </span>
                      </div>
                      <input name="dob" class="form-control" placeholder="Ημερομηνία Γέννησης" type="date" >
                      <span class="error"> <?php echo $dob_err;?></span>
                      
                  </div> <!-- form-group// -->
              
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-phone"></i> </span>
                      </div>
                      
                      <input name="phone" class="form-control" placeholder="Αριθμός Τηλεφώνου" type="text" >
                      <span class="error"> <?php echo $phone_err;?></span>
                      
                  </div> <!-- form-group// -->
              
                  <div class="form-group input-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-lock"></i> </span>
                      </div>
                      <input name="password" class="form-control" placeholder="Ρassword" type="password" >
                      <span class="error"> <?php echo $password_err;?></span>
                      
                  </div> <!-- form-group// -->

                  <div class = "groove">
                    <p>Ανήκω στην κατηγορία:</p>
                    
                    <input type="radio" name="user_category" value="1" checked> Δικαιούχος κανονικού εισιτηρίου<br>
                    <input type="radio" name="user_category" value="2"> Φοιτητής/Μαθητής<br>
                    <input type="radio" name="user_category" value="3"> Άνεργος/Αμεα<br> 
                    <span class="error"> <?php echo $user_category_err;?></span>
                  </div>
                <br>
                <div align="center">
                  <div class="form-group">
                      <input type="submit" value="Υποβολή" class="btn btn-primary py-3 px-5">
                    </div>   
                                                                          
              </form>
              <p class="text-center">Έχετε ήδη λογαριασμό; </p> <a href="login.html" >Σύνδεση</a>
            </div>
            </div>
          </div>
        </div> 
      </div>
    </section>
	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">Car<span>book</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
