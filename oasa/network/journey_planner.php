<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ΟΑΣΑ - Διαδρομή</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../images/favicon.ico" type="image/ico">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/additional.css">
    <meta name="viewport" content="initial-scale=1.0,
      width=device-width" />
      <script type="text/javascript" src='../test-credentials.js'></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
  </head>
  <body>

    
	  <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a href="../index.php"><img src="../images/oasa_logo_transparent.png" alt="logo" width="25%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="../index.php" class="nav-link">Αρχική</a></li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Το Δίκτυο</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../network/info.html">Πληροφορίες και Χάρτης</a>
                  <a class="dropdown-item" href="../network/journey_planner.html">Σχεδιασμός Διαδρομής</a>
                  <a class="dropdown-item" href="../network/status.html">Κατάσταση Δικτύου</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εισιτήρια</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../tickets/info.html">Πληροφορίες Εισιτηρίων</a>
                  <a class="dropdown-item" href="../tickets/buy_online.html">Ηλεκτρονική Αγορά Εισιτηρίων</a>
                </div>
              </div>
          </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Επιβάτες</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../passengers/lost_and_found.html">Απολεσθέντα</a>
                  <a class="dropdown-item" href="../passengers/amea.php">ΆμεΑ</a> <!--TODO: correct translation :p -->
                  <a class="dropdown-item" href="../passengers/complaints.html">Υποβολή Παραπόνων</a>
                  <a class="dropdown-item" href="../passengers/help.html">Βοήθεια</a>
                </div>
              </div>
          </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εταιρία</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../company/info.html">Πληροφορίες Ομίλου</a>
                  <a class="dropdown-item" href="../company/contact_details.html">Στοιχεία Επικοινωνίας</a>
                  <a class="dropdown-item" href="../company/competitions.html">Διαγωνισμοί</a> <!--TODO: correct translation :p -->
                  <a class="dropdown-item" href="../company/news.html">Νέα</a>
                </div>
              </div>
          </li>
          <li class="nav-item">
            <?php
              if(isset($_SESSION['loggedin'])){ ?>
                <div class="dropdown">
                  <a class="dropdown-toggle nav-link user-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item disabled" href="#" disabled><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];?></a>
                    <a class="dropdown-item" href="../account/profile.php">Προβολή Προφίλ</a>
                    <a class="dropdown-item" href="../logout_script.php">Αποσύνδεση</a>
                  </div>
                </div>
                <?php
                  }
                  else {
                    echo '<a href="../account/login.php" class="nav-link user-button">Σύνδεση</a>';
                  }
                ?>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
   <div class="container crumbs-top">
    </div>

    <section class="bg-light front-page-text page-header">
      <div class="container">
        <div class="row no-gutters align-items-end justify-content-center text-center">
          <div class="col-md-9 ftco-animate pb-5">
            
            <h1>Σχεδιασμός Διαδρομής</h1>
          </div>
        </div>
      </div>
    </section>

	

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
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
          <div class="col-md-8 block-9 mb-md-5">
            <div style="width: 640px; height: 480px" id="map"></div>
            <script>
              
              var pointList = [             
                {lat:37.992302, lng:23.681798},
                {lat:37.987821, lng:23.694244},
                {lat:37.978549, lng:23.711469},
                {lat:37.976017, lng:23.725652}
              ]

              function addPolylineToMap(map, pointList) {
                var lineString = new H.geo.LineString();
                for (i = 0; i<pointList.length; i++){
                  lineString.pushPoint(pointList[i]);
                  
                }
                map.addObject(new H.map.Polyline(
                  lineString, { style: { lineWidth: 4 }}
                ));
              }
            
              // Initialize the platform object:
              var platform = new H.service.Platform({
                'apikey': 'Ab83Q-acy3anmVC2oYeAt219WVZ7BLlOgrnhQ75ooq0'
              });
              
              var defaultLayers = platform.createDefaultLayers();

              //Step 2: initialize a map - this map is centered over Europe
              var map = new H.Map(document.getElementById('map'),
                defaultLayers.vector.normal.map,{
                center: { lng: 23.71622, lat: 37.97945},
                zoom: 14,
                pixelRatio: window.devicePixelRatio || 1
              });
              // add a resize listener to make sure that the map occupies the whole container
              window.addEventListener('resize', () => map.getViewPort().resize());
              //Step 3: make the map interactive
              // MapEvents enables the event system
              // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
              var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

              // Create the default UI components
              var ui = H.ui.UI.createDefault(map, defaultLayers);


              // Now use the map as required...
              addPolylineToMap(map, pointList);        
           

             
            </script>       
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


  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/bootstrap-datepicker.js"></script>
  <script src="../js/jquery.timepicker.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>
