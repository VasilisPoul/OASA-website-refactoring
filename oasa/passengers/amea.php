<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ΟΑΣΑ - ΆμεΑ</title>
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
  </head>
  <body>
	  <?php include 'handicap_stations.php';?> </span>
    
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
            <li class="nav-item active">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Επιβάτες</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../passengers/lost_and_found.html">Απολεσθέντα</a>
                  <a class="dropdown-item" href="../passengers/amea.html">ΆμεΑ</a> <!--TODO: correct translation :p -->
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
              if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin'])){ ?>
                <div class="dropdown">
                  <a class="dropdown-toggle nav-link user-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?></a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item disabled" href="#" disabled><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];?></a>
                    <a class="dropdown-item" href="../account/profile.php">Προβολή Προφίλ</a>
                    <a class="dropdown-item" href="#">Αποσύνδεση</a>
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
      <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Αρχική <i class="ion-ios-arrow-forward"></i></a></span> <span>ΆμεΑ <i class="ion-ios-arrow-forward"></i></span>
      </p>
    </div>

    <section class="bg-light front-page-text page-header">
      <div class="container">
        <div class="row no-gutters align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	
            <h1>Άτομα με Ειδικές Ανάγκες</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light front-page-text">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-10">
        		
         
            Το πρόβλημα της μετακίνησης-μεταφοράς των εμποδιζομένων ατόμων στις σύγχρονες πόλεις παραμένει έντονο με αρνητικές συνέπειες στην ποιότητα ζωής λόγω της μη ικανοποιητικής πρόσβασης στα ΜΜΜ. Ως εμποδιζόμενα άτομα νοούνται τα πρόσωπα εκείνα που λόγω κάποιας προσωπικής αιτίας ιδιαιτερότητας η καταστάσεως (Νόσος, Πάθησης, Βλάβης, Εγκυμοσύνης, μεταφορά αντικειμένων κλπ.) ή λόγω διαφόρων φραγμών και εμποδίων που εγείρονται στο κάθε είδους περιβάλλον εμποδίζεται η δυνατότητα και ικανότητάς τους για πρόσβαση σε διάφορους χώρους και στα ΜΜΜ.
            <br><br>
            Τα εμποδιζόμενα άτομα βάσει στατιστικών ανέρχονται στο 42.5% του ελληνικού πληθυσμού. Ανάλυση:  
            <br><br>
            <ul>
              <li>10% ΆμεΑ. Άτομα με κάθε είδους Αναπηρία.</li>
              <li>14% Ηλικιωμένοι 60-74 ετών</li>
              <li>6% Υπερήλικες άνω των 75 ετών</li>
              <li>11%  Νήπια 0-4 ετών και οι συνοδοί των</li>
              <li>1,5%  Έγκυες γυναίκες</li>
            </ul>
            Η κακή ποιότητα των  παρεχομένων υπηρεσιών δημιουργούν συνθήκες αποκλεισμού των ατόμων με ανάγκες στη καθημερινή τους ζωή. Ο σχεδιασμός και η ανάπτυξη των μέσων μεταφοράς δεν καλύπτει μόνο τις υπάρχουσες ανάγκες μιας μετακίνησης του πληθυσμού αλλά σχεδιάζεται να προσελκύει όλο και περισσότερες ομάδες νέων επιβατών, απαλείφοντας προβλήματα κοινωνικού αποκλεισμού και προσφέροντας καλύτερες υπηρεσίες σε  όλους τους χρήστες.
            <br>
            <br>
            <br>
            <p>ΕΙΔΙΚΑ ΟΧΗΜΑΤΑ ΓΙΑ ΤΗΝ  ΜΕΤΑΦΟΡΑ ΑΤΟΜΩΝ ΜΕ ΑΝΑΠΗΡΙΑ</p>
            Με μέριμνα της Ο.ΣΥ. Α.Ε λειτουργεί υπηρεσία για την εξυπηρέτηση ατόμων με αναπηρία (ΑμεΑ), η οποία παρέχει δωρεάν μετακίνηση σε όσους δεν μπορούν να εξυπηρετηθούν από τα συμβατικά οχήματα των αστικών συγκοινωνιών.
            <br>
            Η υπηρεσία διαθέτει τρία (3) ειδικά οχήματα που διαθέτουν μικρό αριθμό (3 - 7) θέσεων για επιβάτες, θέσεις (3 - 4) για αναπηρικά αμαξίδια και μία θέση συνοδού.
            <br>
            Η χρήση της υπηρεσίας αυτής, για την μετακίνηση ατόμων με αναπηρία θα γίνεται απαραίτητα με ραντεβού και με την προϋπόθεση ότι θα υπάρχει διαθέσιμο όχημα.
            <br>
            Για ραντεβού οι ενδιαφερόμενοι θα καλούν το τηλέφωνο 210 42 70 748. Οι ώρες εξυπηρέτησης των ΑμεΑ με τα ειδικά οχήματα θα είναι από από Δευτέρα - Παρασκευή από 07:30 - 14:00
         
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light front-page-text">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
		<p1>Οδηγίες προσέγγισης σε στάσεις λεωφορείων</p1>
          <br>
          <div>
		 <button data-toggle="collapse" data-target="#metro">Για το ΜΕΤΡΟ</button>

		<div id="metro" class="collapse">
		 <ul>
				<li>Πηγαίνεις στον πλησιέστερο σταθμό της οικίας σου ή της διαδρομής που επιθυμείς.</li>
				<li>Από τις ράμπες των πεζοδρομίων προσεγγίζεις τον ανελκυστήρα του σταθμού.</li>
				<li>Εισέρχεσαι στον ανελκυστήρα και κατεβαίνεις στις αποβάθρες των σταθμών. Όλοι οι ανελκυστήρες είναι πλήρως προσβάσιμοι και στην είσοδο και στην έξοδο τους. Εάν αντιμετωπίσεις πρόβλημα χρησιμοποίησε το κουδούνι κινδύνου.</li>
				<li>Από τις αποβάθρες εισέρχεσαι στους συρμούς είτε μόνος είτε με την βοήθεια του συνοδού σου ή των υπευθύνων των σταθμών, οι οποίοι θα σου παράσχουν κάθε δυνατή βοήθεια, όταν θα τους ζητηθεί. Η επιβίβαση-αποβίβαση για τα αναπηρικά αμαξίδια γίνεται ευκολότερη στο πρώτο ή το τελευταίο βαγόνι, γιατί φέρουν ράμπα για το κενό που υπάρχει μεταξύ αποβάθρας και συρμού και σχετική σήμανση.</li>
				<li>Εάν έχεις πρόβλημα όρασης ζήτησε βοήθεια από τον υπεύθυνο του σταθμού, ο οποίος θα σε βοηθήσει στην επιβίβαση και θα ενημερώσει τον υπεύθυνο του σταθμού που θα αποβιβασθείτε για να σε βοηθήσει.</li>
			    </ul>
		</div> 
		  <br>
		  
		  <button data-toggle="collapse" data-target="#treno">Για τον ΗΛΕΚΤΡΙΚΟ ΣΙΔΗΡΟΔΡΟΜΟ</button>

		<div id="treno" class="collapse">
			 <ul>
				<li>Ακολούθησε όλες τις παραπάνω οδηγίες, γιατί όλοι οι σταθμοί του ΗΣΑΠ έχουν ανακαινισθεί με σκοπό την πλήρη πρόσβαση των Εμποδιζομένων Ατόμων (Ράμπες, Ανελκυστήρες, Φύλακες κ.λ.π.).</li>
				<li>Εισέρχεσαι στους συρμούς από την πρώτη πόρτα του πρώτου βαγονιού, όπου υπάρχει και σχετική σήμανση.</li>
				<li>Στους σταθμούς Άγ. Νικολάου, Ομόνοιας, Μοναστηράκι καλέστε τους φύλακες να φέρουν την κινητή ράμπα και να σας βοηθήσουν, αφού την τοποθετήσουν, επειδή στους παραπάνω σταθμούς υπάρχει μεγάλο κενό μεταξύ αποβάθρας και συρμών. Υπάρχει σχετική σήμανση στα βαγόνια των συρμών και ηχητική ενημέρωση στους παραπάνω σταθμούς.</li>
			</ul>
		</div> 
		  
		   <br>
		  <button data-toggle="collapse" data-target="#tram">Για το ΤΡΑΜ</button>

		<div id="tram" class="collapse">
			 <ul>
                <li>Πλησιάζεις τον πλησιέστερο σταθμό της οικίας σου, συνήθως με την βοήθεια συνοδού, γιατί η πρόσβαση προς τις ράμπες των στάσεων του ΤΡΑΜ δεν είναι εύκολη, επειδή τα πεζοδρόμια δεν έχουν ακόμη προσαρμοσθεί κατάλληλα.</li>
                <li>Εισέρχεσαι στους συρμούς μόνος σου ή με την βοήθεια του συνοδού σου όπου υπάρχουν ειδικές θέσεις για Εμποδιζόμενα Άτομα.</li>
            </ul>
		</div> 
		   <br>
		  
		   <button data-toggle="collapse" data-target="#bus">Για τα ΛΕΩΦΟΡΕΙΑ</button>

		<div id="bus" class="collapse">
		<ul>
                <li>Πλησιάζεις την κοντινότερη στάση της λεωφορειακής γραμμής που χρησιμοποιείς μόνος ή με την βοήθεια συνοδού.</li>
                <li>Να προτιμήσετε τις στάσεις με προεξοχές που έχουν τοποθετηθεί για εξυπηρέτηση των Εμποδιζομένων Ατόμων.</li>
                <li>Όταν πλησιάζει το λεωφορείο σου, ο οδηγός όταν σταματήσει είναι υποχρεωμένος να χρησιμοποιήσει την επιγονάτηση ή την ράμπα, εάν έχει το λεωφορείο. Σχεδόν όλα τα λεωφορεία έχουν επιγονάτηση, ενώ το 1/4 αυτών φέρει ράμπες.</li>
                <li>Με την βοήθεια του συνοδού σου, των επιβατών ή του οδηγού επιβιβάζεσαι. Όλοι οι οδηγοί έχουν ενημερωθεί να παρέχουν κάθε βοήθεια στα εμποδιζόμενα άτομα. Εάν έχεις κάποιο παράπονο κάλεσε τον ΟΑΣΑ, τηλ. 210 82 00 887 ή στο τηλεφωνικό κέντρο του ΟΑΣΑ 11 185.</li>
                <li>Εάν υπάρχουν ομάδες Εμποδιζομένων Ατόμων (Σχολεία, Σύλλογοι, κ.λ.π. ) που θα πρέπει να μετακινούνται καθημερινά, κάλεσε τον ΟΑΣΑ στα τηλ. 2108200883, 2108200881 για εξυπηρέτησή σας. Ήδη εξυπηρετείται με την λεωφ. Γραμμή 030 το Κ.Ε.Ε.Π.Ε.Α. Κέντρο Επαγγελματικής Εκπαίδευσης Παιδιών με Ειδικές Ανάγκες. Επίσης η λεωφ. Γραμμή 911 εξυπηρετεί τον "Φάρο Τυφλών".</li>
            </ul>
		</div> 
		   <br>
		  
		   <button data-toggle="collapse" data-target="#trolley">Για τα ΤΡΟΛΕΪ</button>

		<div id="trolley" class="collapse">
		  <ul>
                <li>Πλησιάζεις την κοντινότερη στάση της γραμμής τρόλεϊ που χρησιμοποιείς.</li>
                <li>Να προτιμήσετε τις στάσεις με προεξοχές, που έχουν τοποθετηθεί για εξυπηρέτηση των Εμποδιζομένων Ατόμων.</li>
                <li>Όταν πλησιάσει και σταματήσει το τρόλεϊ, ο οδηγός είναι υποχρεωμένος να χρησιμοιήσει την επιγονάτηση ή την ράμπα, εάν έχει το τρόλεϊ. Όλα τα τρόλεϊ έχουν επιγονάτηση και το 1/4 ράμπες. Εάν έχεις κάποιο παράπονο κάλεσε τον ΟΑΣΑ, τηλ. 21082 00 887 ή στο τ.κ. 11185.</li>
                <li>Με την βοήθεια του συνοδού σου των επιβατών και των οδηγών επιβιβάζεσαι. Όλοι οι οδηγοί έχουν ενημερωθεί να παρέχουν κάθε διευκόλυνση στα εμποδιζόμενα άτομα.</li>
            </ul>
		</div> 
		   <br>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light front-page-text">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="row mb-5">
            <div class="col-md-12">
              <div class="border w-100 p-4 rounded mb-2 d-flex">
                <div class="icon mr-3">
                  <span class="icon-map-o"></span>
                </div>
                <p>Προεξοχές Πεζοδρομίων ΟΑΣΑ</p>
              </div>
            </div>
            <div class="col-md-12">
              <div class="border w-100 p-4 rounded mb-2 d-flex">
                <div class="overflow-auto">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">ΚΩΔΙΚΟΣ</th>
                        <th scope="col">ΟΝΟΜΑ ΣΤΑΣΗΣ</th>
                        <th scope="col">ΓΡΑΜΜΕΣ</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>010058</td>
                        <td>ΑΣΤΥΝΟΜΙΑ</td>
                        <td>...</td>
                      
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    <!--    <div class="row justify-content-center">
        	<div class="col-md-12">
        		<div id="map" class="bg-white"></div>
        	</div>
        </div>-->
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>
