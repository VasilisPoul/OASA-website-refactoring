<!-- 

HTML/CSS by: Maria Karamina 

PHP script by: Giorgos Koursiounis

-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>OASA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet"> 

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
    <link rel="stylesheet" href="css/additional.css">
  </head>
  <body>

  <?php

  $servername = "localhost";
  $username = "user";
  $password = "password";
  $dbname = "oasa";

  $delays = "";
  $strikes = "";
  $planned_work = "";
  $good_service = "";
  $out_of_order = "";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  //find delays
  $sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Καθυστερήσεις\" AND l.idcolour = c.idcolour";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $delays .= "<button type=\"button\" class=\"btn disabled\" style=\"margin: 2px;color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button>";
    }
  }

  //find strikes
  $sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Απεργίες\" AND l.idcolour = c.idcolour";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $strikes .= "<button type=\"button\" class=\"btn disabled\" style=\"margin: 2px;color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button>";
    }
  }

  //find planned work
  $sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Έργα σε εξέλιξη\" AND l.idcolour = c.idcolour";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $planned_work .= "<button type=\"button\" class=\"btn disabled\" style=\"margin: 2px;color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button>";
    }
  }

  //find good service
  $sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Ομαλή λειτουργία\" AND l.idcolour = c.idcolour";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $good_service .= "<button type=\"button\" class=\"btn disabled\" style=\"margin: 2px;color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button>";
    }
  }

  //find planned work
  $sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Εκτός λειτουργίας\" AND l.idcolour = c.idcolour";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $out_of_order .= "<button type=\"button\" class=\"btn disabled\" style=\"margin: 2px;color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button>";
    }
  }

  $conn->close();
  ?> 


    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a href="index.html"><img src="images/oasa_logo_transparent.png" alt="logo" width="25%"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Αρχική</a></li>
	          <li class="nav-item">
	          	<div class="dropdown">
	          		<a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Το Δίκτυο</a>
					<div class="dropdown-menu">
		          		<a class="dropdown-item" href="network/info.html">Πληροφορίες και Χάρτης</a>
		          		<a class="dropdown-item" href="network/journey_planner.html">Σχεδιασμός Διαδρομής</a>
		          		<a class="dropdown-item" href="network/status.html">Κατάσταση Δικτύου</a>
	          		</div>
	      	    </div>
	      	  </li>
	      	  <li class="nav-item">
	          	<div class="dropdown">
	          		<a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εισιτήρια</a>
					<div class="dropdown-menu">
		          		<a class="dropdown-item" href="tickets/info.html">Πληροφορίες Εισιτηρίων</a>
		          		<a class="dropdown-item" href="tickets/buy_online.html">Ηλεκτρονική Αγορά Εισιτηρίων</a>
	          		</div>
	      	    </div>
		      </li>
	          <li class="nav-item">
	          	<div class="dropdown">
	          		<a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Επιβάτες</a>
					<div class="dropdown-menu">
		          		<a class="dropdown-item" href="passengers/lost_and_found.html">Απολεσθέντα</a>
		          		<a class="dropdown-item" href="passengers/pwd.html">ΆμεΑ</a> <!--TODO: correct translation :p -->
		          		<a class="dropdown-item" href="passengers/complaints.html">Υποβολή Παραπόνων</a>
		          		<a class="dropdown-item" href="passengers/help.html">Βοήθεια</a>
	          		</div>
	      	    </div>
		      </li>
	          <li class="nav-item">
	          	<div class="dropdown">
	          		<a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εταιρία</a>
					<div class="dropdown-menu">
		          		<a class="dropdown-item" href="company/info.html">Πληροφορίες Ομίλου</a>
		          		<a class="dropdown-item" href="company/contact_details.html">Στοιχεία Επικοινωνίας</a>
		          		<a class="dropdown-item" href="company/competitions.html">Διαγωνισμοί</a> <!--TODO: correct translation :p -->
		          		<a class="dropdown-item" href="company/news.html">Νέα</a>
	          		</div>
	      	    </div>
		      </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bus3.jpg');" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div> <!-- Remove this to remove dimming -->
  		<div class="container">
	    	<div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
	          	<div class="col-md-4 d-flex align-items-center">
		  			<form action="#" class="request-form ftco-animate">
		  				<div class="form-group">
			                <label for="" class="label">Απο</label>
			                <input type="text" class="form-control" placeholder="πχ. Εθνικής Αντιστάσεως 33">
		              	</div>
		              	<div class="form-group">
		              		<label for="" class="label">Προς</label>
				            <input type="text" class="form-control" placeholder="Πχ. Λιμάνι Πειραιώς">
		              	</div>
  						<label class="checkbox"><input type="checkbox" value=""> Προσβάσιμη σε ΆμεΑ</label>
		              	<div class="form-group">
		              		<label for="" class="label">Ποτε</label>
		              		<br />
							<label class="radio-inline"><input type="radio" name="optradio" checked> Αναχώρηση</label>
							<label class="radio-inline"><input type="radio" name="optradio"> Άφιξη</label>
							<input type="text" class="form-control" id="book_pick_date" placeholder="Ημερομηνία">
							<input type="text" class="form-control" id="time_pick" placeholder="Ώρα">
						</div>

			            <div class="form-group">
		              		<input type="submit" value="Αναζήτηση Διαδρομής" class="btn btn-primary py-3 px-4">
			            </div>
	    			</form>
				</div>
				<div class="col-md-8 d-flex align-items-center">
					<div class="text w-100 text-left mb-md-5 pb-md-5 front-page-text">
	            		<h1 class="mb-4">Που θέλετε να πάτε;</h1>
	            		<p style="font-size: 18px;">Με την νέα εφαρμογή του ΟΑΣΑ μπορείτε με εύκολα και απλά βήματα να προγραμματίσετε την διαδρομή σας συμπληρώνοντας την φόρμα αναζήτησης</p>
	            	</div>
				</div>
    		</div>
  		</div>
	</div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<h1 class="text-right">Κατάσταση Γραμμών</h1>

    		<div class="light-box">
    			<div class="row justify-content-center">
    				<div class="col-md-6 text-center">
    					<div class="row btm-border">
    						<div class="col-md-12">
    							<h5>Εκτός Λειτουργίας</h5>
                  <span><?php echo $out_of_order;?></span>
    						</div>
    					</div>
    					<div class="row btm-border">
    						<div class="col-md-12">
    							<h5>Σε Απεργία</h5>   		
                  <span><?php echo $strikes;?></span>
    						</div>
    					</div>
    					<div class="row btm-border">
    						<div class="col-md-12">
    							<h5>Καθυστερήσεις</h5>
                  <span><?php echo $delays;?></span>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-12">
    							<h5>Προγραμματισμένες Εργασίες</h5>
                  <span><?php echo $planned_work;?></span>
    						</div>
    					</div>
    				</div>
    				<div class="col-md-6 text-center good-service">
    					<h5>Ομαλή Λειτουργία</h5>
              <span><?php echo $good_service;?></span>
    				</div>
    			</div>
    		</div>


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

  <script src="js/system-status-tabs.js"></script>
    
  </body>
</html>
