<!-- 

HTML/CSS by: Maria Karamina (sdi1600059)

-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ΟΑΣΑ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/favicon.ico" type="image/ico">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
      
	  <?php include 'network/service_status.php';?>

	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a href="index.php"><img src="images/oasa_logo_transparent.png" alt="logo" width="25%"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Αρχική</a></li>
	          <li class="nav-item">
	          	<div class="dropdown">
	          		<a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Το Δίκτυο</a>
					<div class="dropdown-menu">
		          		<a class="dropdown-item" href="network/info.php">Πληροφορίες και Χάρτης</a>
		          		<a class="dropdown-item" href="network/journey_planner.php">Σχεδιασμός Διαδρομής</a>
		          		<a class="dropdown-item" href="network/status.php">Κατάσταση Δικτύου</a>
	          		</div>
	      	    </div>
	      	  </li>
	      	  <li class="nav-item">
	          	<div class="dropdown">
	          		<a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εισιτήρια</a>
					<div class="dropdown-menu">
		          		<a class="dropdown-item" href="tickets/info.php">Πληροφορίες Εισιτηρίων</a>
		          		<a class="dropdown-item" href="tickets/buy_online.php">Ηλεκτρονική Αγορά Εισιτηρίων</a>
	          		</div>
	      	    </div>
		      </li>
	          <li class="nav-item">
	          	<div class="dropdown">
	          		<a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Επιβάτες</a>
					<div class="dropdown-menu">
		          		<a class="dropdown-item" href="passengers/lost_and_found.php">Απολεσθέντα</a>
		          		<a class="dropdown-item" href="passengers/amea.php">ΆμεΑ</a> <!--TODO: correct translation :p -->
		          		<a class="dropdown-item" href="passengers/complaints.php">Υποβολή Παραπόνων</a>
		          		<a class="dropdown-item" href="passengers/help.php">Βοήθεια</a>
	          		</div>
	      	    </div>
		      </li>
	          <li class="nav-item">
	          	<div class="dropdown">
	          		<a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εταιρία</a>
					<div class="dropdown-menu">
		          		<a class="dropdown-item" href="company/info.php">Πληροφορίες Ομίλου</a>
		          		<a class="dropdown-item" href="company/contact_details.php">Στοιχεία Επικοινωνίας</a>
		          		<a class="dropdown-item" href="company/competitions.php">Διαγωνισμοί</a> <!--TODO: correct translation :p -->
		          		<a class="dropdown-item" href="company/news.php">Νέα</a>
	          		</div>
	      	    </div>
		      </li>
		      <li class="nav-item">
		      	<?php
		      		if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin'])){ ?>
		      		  <div class="dropdown">
		      		  	<a class="dropdown-toggle nav-link user-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?></a>
		      		  	<div class="dropdown-menu">
		      		  		<a class="dropdown-item disabled" href="#" disabled><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];?></a>
		      		  		<a class="dropdown-item" href="account/profile.php">Προβολή Προφίλ</a>
		          			<a class="dropdown-item" href="account/logout_script.php">Αποσύνδεση</a>
	          			</div>
	          		</div>
		      	<?php
		      		}
		      		else {
		      			echo '<a href="account/login.php" class="nav-link user-button">Σύνδεση</a>';
		      		}
		      	?>
		      </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bus.jpg');" data-stellar-background-ratio="0.5">
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

     <section class="ftco-section ftco-no-pt bg-light front-page-text">
    	<div class="container">
    		<h1 class="text-right">Κατάσταση Γραμμών</h1>

    		<div class="light-box">
    			<div class="row justify-content-center">
    				<div class="col-md-6 text-center">
    					<div class="row btm-border">
    						<div class="col-md-12">
    							<label>Εκτός Λειτουργίας</label><br>
                  				<span><?php echo $out_of_order;?></span>
    						</div>
    					</div>
    					<div class="row btm-border">
    						<div class="col-md-12">
    							<label>Σε Απεργία</label><br>   		
                  				<span><?php echo $strikes;?></span>
    						</div>
    					</div>
    					<div class="row btm-border">
    						<div class="col-md-12">
    							<label>Καθυστερήσεις</label><br>
                  				<span><?php echo $delays;?></span>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-md-12">
    							<label>Προγραμματισμένες Εργασίες</label><br>
                  				<span><?php echo $planned_work;?></span>
    						</div>
    					</div>
    				</div>
    				<div class="col-md-6 text-center good-service">
    					<label>Ομαλή Λειτουργία</label><br>
              			<span><?php echo $good_service;?></span>
    				</div>
    			</div>
    		</div>
      	</div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light front-page-text">
      <div class="container">
        <h1>Εισιτήρια ATH.ENA card και ATH.ENA ticket</h1>
        <div class="row">
          <div class="col-md-8">
            <p>
              Γυρίστε την Αθήνα με όλα τα μέσα του ΟΑΣΑ με το ηλεκτρονικό εισιτήριο ATH.ENA ticket.
              Φορτώστε πολλές διαδρομές στην προσωποποιημένη ή ανώνυμη κάρτα σας ATH.ENA card ή το πολλαπλό εισιτήριο και προστατέψτε το περιβάλλον.
              <br />
              <a href="tickets/buy_online.php">Αγοράστε ή επαναφορτίστε την κάρτα ή το εισιτήριό σας</a>
              <br />
              <a href="tickets/info.php">Μάθετε περισσότερα</a>
            </p>
          </div>
          <div class="col-md-2">
            <img src="images/athena_card.png" alt="athena card">
          </div>
          <div class="col-md-2">
            <img src="images/athena_ticket.png" alt="athena ticket">
          </div>
            
            
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2>ΟΑΣΑ - Οργανισμός Αστικών Συγκοινωνιών Αθηνών Α.Ε.</h2>
              <p>
              	Εταιρίες Ομίλου
              	<ul class="list-unstyled">
              		<li><a href="http://www.osy.gr" target="_blank">ΟΣΥ - Οδικές Συγκοινωνίες Α.Ε.</a></li>
              		<li><a href="http://www.stasy.gr" target="_blank">ΣΤΑΣΥ - Σταθερές Συγκοινωνίες Α.Ε.</a></li>
              	</ul>
              </p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Δίκτυο</h2>
              <ul class="list-unstyled">
                <li><a href="network/info.php" class="py-2 d-block">Πληροφορίες και Χάρτης</a></li>
                <li><a href="network/journey_planner.php" class="py-2 d-block">Σχεδιασμός Διαδρομής</a></li>
                <li><a href="network/status.php" class="py-2 d-block">Κατάσταση Δικτύου</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Εισιτήρια</h2>
              <ul class="list-unstyled">
                <li><a href="tickets/info.php" class="py-2 d-block">Πληροφορίες Εισιτηρίων</a></li>
                <li><a href="tickets/buy_online.php" class="py-2 d-block">Ηλεκτρονική Αγορά Εισιτηρίων</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Επιβάτες</h2>
              <ul class="list-unstyled">
                <li><a href="passengers/lost_and_found.php" class="py-2 d-block">Απολεσθέντα</a></li>
                <li><a href="passengers/amea.php" class="py-2 d-block">ΆμεΑ</a></li>
                <li><a href="passengers/complaints.php" class="py-2 d-block">Υποβολη Παραπόνων</a></li>
                <li><a href="passengers/help.php" class="py-2 d-block">Βοήθεια</a></li>
              </ul>
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
