<!-- 

HTML/CSS by: Maria Karamina (sdi1600059)

PHP script (line 158) by: Giorgos Koursiounis (sdi1600077)

-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ΟΑΣΑ - Αγορά Εισιτηρίων</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../images/favicon.ico" type="image/ico">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">

    <link rel="stylesheet" href="../../css/aos.css">

    <link rel="stylesheet" href="../../css/ionicons.min.css">

    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../../css/flaticon.css">
    <link rel="stylesheet" href="../../css/icomoon.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/additional.css">
  </head>
  <body>

    <?php include '../ticket_categories.php' ?>
    <?php include '../../account/get_user.php' ?>
    
   <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-dark ftco-navbar-light navbar-color" id="ftco-navbar">
      <div class="container">
        <a href="../../index.php"><img src="../../images/oasa_logo_transparent.png" alt="logo" width="25%"></a>
        <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="../../index.php" class="nav-link">Αρχική</a></li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Το Δίκτυο</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../../network/info.php">Πληροφορίες και Χάρτης</a>
                  <a class="dropdown-item" href="../../network/journey_planner.php">Σχεδιασμός Διαδρομής</a>
                  <a class="dropdown-item" href="../../network/status.php">Κατάσταση Δικτύου</a>
                </div>
              </div>
            </li>
            <li class="nav-item active">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εισιτήρια</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../../tickets/info.php">Πληροφορίες Εισιτηρίων</a>
                  <a class="dropdown-item" href="../../tickets/buy_online.php">Ηλεκτρονική Αγορά Εισιτηρίων</a>
                </div>
              </div>
          </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Επιβάτες</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../../passengers/lost_and_found.php">Απολεσθέντα</a>
                  <a class="dropdown-item" href="../../passengers/amea.php">ΆμεΑ</a> <!--TODO: correct translation :p -->
                  <a class="dropdown-item" href="../../passengers/complaints.php">Υποβολή Παραπόνων</a>
                  <a class="dropdown-item" href="../../passengers/help.php">Βοήθεια</a>
                </div>
              </div>
          </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Εταιρία</a>
          <div class="dropdown-menu">
                  <a class="dropdown-item" href="../../company/info.php">Πληροφορίες Ομίλου</a>
                  <a class="dropdown-item" href="../../company/contact_details.php">Στοιχεία Επικοινωνίας</a>
                  <a class="dropdown-item" href="../../company/competitions.php">Διαγωνισμοί</a> <!--TODO: correct translation :p -->
                  <a class="dropdown-item" href="../../company/news.php">Νέα</a>
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
                    <a class="dropdown-item" href="../../account/profile.php">Προβολή Προφίλ</a>
                    <a class="dropdown-item" href="../../account/logout_script.php">Αποσύνδεση</a>
                  </div>
                </div>
            <?php
              }
              else {
                echo '<a href="../../account/login.php" class="nav-link user-button">Σύνδεση</a>';
              }
            ?>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <div class="container crumbs-top">
      <p class="breadcrumbs">
        <span class="mr-2"><a href="../../index.php">Αρχική <i class="fa fa-angle-right"></i></a></span> 
        <span class="mr-2">Εισιτήρια <i class="fa fa-angle-right"></i></span> 
        <span class="mr-2"><a href="../buy_online.php">Ηλεκτρονική Αγορά Εισιτηρίων <i class="fa fa-angle-right"></i></a></span> 
        <span class="mr-2">Έκδοση Κάρτας <i class="fa fa-angle-right"></i></span>
      </p>
    </div>

    <section class="bg-light front-page-text page-header">
      <div class="container">
        <div class="row no-gutters align-items-end justify-content-center text-center">
          <div class="col-md-9 ftco-animate pb-5">
            <h1>Έκδοση Κάρτας</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light">
      <div class="container">
        <div>
          <!-- One "step-screen" for each step in the form: -->

          <div class="step-screen">
            <div class="container">
              <ul class="progressbar">
                <li class="active">Εισαγωγή Πληροφοριών</li>
                <li>Δημιουργία PIN</li>
                <li>Επιλογή Κομίστρου</li>
                <li>Πληρωμή</li>
                <li>Ολοκλήρωση</li>
              </ul>
            </div>
            <br />
            <br />
            <br />

            <?php

                $servername = "localhost";
                $server_username = "user";
                $server_password = "password";
                $dbname = "oasa";

                $message = "";

                //create connection
                $conn = new mysqli($servername, $server_username, $server_password, $dbname);
                if($conn->connect_error){
                  die("Connection failed: " . $conn->connect_error);
                }

                $result = "";
                if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin'])){ 
                  $sql = "SELECT c.idcard, c.expired, tc.name, tc.price FROM card c, ticket_category tc WHERE c.iduser = \"" . $_SESSION['loggedin'] . "\" AND tc.idticket_category = c.idticket_category";
                  $result = $conn->query($sql);
                }

                if(!empty($result) && $result->num_rows >0){
                  $message = "<div class=\"alert alert-warning\"><strong>Προσοχή!</strong> Έχετε ήδη εκδώσει κάρτα. Δεν μπορείτε να εκδόσετε παραπάνω από μια κάρτα ανά χρήστη</div><br><h4>Τρέχουσες πληροφορίες κάρτας</h4><table class=\"table\"><thead><tr><th scope=\"col\">Κωδικός κάρτας</th><th scope=\"col\">Κατηγορία κομίστρου</th><th scope=\"col\">Τιμή</th><th scope=\"col\">Έχει λήξει</th></tr></thead><tbody>";

                  while($row = $result->fetch_assoc()){
                    $message .= "<tr><td>" . $row["idcard"] . "</td><td>" . $row["name"] . "</td><td>" . $row["price"] . "</td>";

                    if($row["expired"] == 1){
                      $message .= "<td>ΝΑΙ</td></tr>";
                    }
                    else{
                      $message .= "<td>ΟΧΙ</td></tr>";
                    }
                  }

                  $message .= "</tbody></table>";

                  echo $message;
                }
                else { ?>


                  <p>Παρακαλούμε εισάγετε τα στοιχεία σας</p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group-error input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-user"></i> </span>
                        </div>
                        <input id="buy-first_name" name="first_name" class="form-control" placeholder="Όνομα" type="text" value="<?php echo $first_name; ?>" <?php if($first_name) echo "disabled"; ?>>
                      </div> <!-- form-group-error// -->
                      <span id="buy-first_name-err" class="error-message"></span>
                      
                      <div class="form-group-error input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-user"></i> </span>
                        </div>
                        <input id="buy-last_name" name="last_name" class="form-control" placeholder="Επίθετο" type="text" value="<?php echo $last_name; ?>" <?php if($last_name) echo "disabled"; ?>> 
                      </div> <!-- form-group-error// -->
                      <span id="buy-last_name-err" class="error-message"></span>
                          
                      <div class="form-group-error input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-envelope-o"></i> </span>
                        </div>
                        <input id="buy-email" name="email" class="form-control" placeholder="Email" type="email" value="<?php echo $email; ?>" <?php if($email) echo "disabled"; ?>>
                      </div> <!-- form-group-error// -->
                      <span id="buy-email-err" class="error-message"></span>
                          
                      <div class="form-group-error input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-calendar"></i> </span>
                        </div>
                        <input id="buy-dob" name="dob" class="form-control" placeholder="Ημερομηνία Γέννησης" type="date" value="<?php echo $dob; ?>" <?php if($dob) echo "disabled"; ?>>  
                      </div> <!-- form-group-error// -->
                      <span id="buy-dob-err" class="error-message"></span>
                      
                      <div class="form-group-error input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-phone"></i> </span>
                        </div>
                      <input id="buy-phone" name="phone" class="form-control" placeholder="Αριθμός Τηλεφώνου" type="text" value="<?php echo $phone; ?>" <?php if($phone) echo "disabled"; ?>>
                      </div> <!-- form-group-error// -->
                      <span id="buy-phone-err" class="error-message"></span>
                    </div>

                    <div class="col-md-6">
                      <br />
                      <div class = "groove">
                        <p>Ανήκω στην κατηγορία:</p>
                        
                        <input type="radio" class="radio" name="user_category" value="1" <?php if(!$user_category||$user_category=="1") echo "checked"; else echo "disabled";?>> Δικαιούχος κανονικού εισιτηρίου<br>
                        <input type="radio" class="radio" name="user_category" value="2" <?php if($user_category=="2") echo "checked"; else if($user_category) echo "disabled";?>> Φοιτητής/Μαθητής<br>
                        <input type="radio" class="radio" name="user_category" value="3" <?php if($user_category=="3") echo "checked"; else if($user_category) echo "disabled";?>> Άνεργος/Αμεα<br> 
                        <span id="buy-category-err" class="error-message"></span>
                      </div>

                      <br />
                      <label>Αν ανήκετε σε κατηγορία με έκπτωση, εισάγετε τον κωδικό/αναγνωριστικό του δικαιολογητικού σας</label>
                      <div class="form-group input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"> <i class="icon-tag"></i> </span>
                        </div>
                      <input id="buy-discount_id" name="discount_id" class="form-control" placeholder="Κωδικός Πάσο/Κάρτας ανεργίας/Κάρτας ΆμεΑ" type="text" value="<?php echo $discountid; ?>" <?php if($discountid) echo "disabled"; ?>>
                      </div> <!-- form-group-error// -->
                      <span id="buy-discount_id-err" class="error-message"></span>

                    </div>
                  </div>

                <?php 
                }
            ?>

          </div>

          <div class="step-screen">
            <div class="container">
              <ul class="progressbar">
                <li class="active">Εισαγωγή Πληροφοριών</li>
                <li class="active">Δημιουργία PIN</li>
                <li>Επιλογή Κομίστρου</li>
                <li>Πληρωμή</li>
                <li>Ολοκλήρωση</li>
              </ul>
            </div>
            <br />
            <br />
            <br />
            <p>Επιλέξτε έναν κωδικό PIN για τη νέα σας κάρτα</p>
            <input type="password" id="buy-card-pin-input" class="buy-input mr-3" placeholder="PIN" required>
            <input type="password" id="buy-card-pin-check" class="buy-input ml-3" placeholder="Επιβεβαίωση PIN" required>
            <div id="buy-pin-error" class="error-message"></div>
            
          </div>

          <div class="step-screen">
            <div class="container">
              <ul class="progressbar">
                <li class="active">Εισαγωγή Πληροφοριών</li>
                <li class="active">Δημιουργία PIN</li>
                <li class="active">Επιλογή Κομίστρου</li>
                <li>Πληρωμή</li>
                <li>Ολοκλήρωση</li>
              </ul>
            </div>
            <br />
            <br />
            <br />
            <p>Επιλέξτε ένα κόμιστρο να βάλετε στη νέα σας κάρτα</p>
            <div class="container" id="tickets-container">
              <div class="row ticket-row">
                <div class="col-md-6">
                  <br />
                  <select class="buy-input buy-select" style="width: 100%; text-overflow: ellipsis;">
                    <?php foreach($ticket_names as $ticket) {
                      echo  "<option value='$ticket[0]' title='$ticket[1]' data-price='$ticket[2]'>$ticket[1]</option>";
                    } ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <div class="row">
                    <div class="col-md-6">
                      <label class="mb-0">Ποσότητα</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <input type="number" class="buy-input buy-quantity" min="1" max="100" value="1" disabled>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <br />
                  <button type="button" class="remove-row" onclick="removeTicket(this)" style="display:none"><i class="fa fa-times"></i></button>
                </div>
              </div>
            </div>
          </div>

          <div class="step-screen">
            <div class="container">
              <ul class="progressbar">
                <li class="active">Εισαγωγή Πληροφοριών</li>
                <li class="active">Δημιουργία PIN</li>
                <li class="active">Επιλογή Κομίστρου</li>
                <li class="active">Πληρωμή</li>
                <li>Ολοκλήρωση</li>
              </ul>
            </div>
            <br />
            <br />
            <br />
            <div class="row">
              <div class="col-md-9">
                <h3>Προϊόν προς αγορά:</h3>
                <table id="products-table" style="width:100%">
                  <tr>
                    <th>Προϊόν</th>
                    <th>Ποσότητα</th>
                    <th>Τιμή</th>
                  </tr>
                </table>
                <script src="../../js/get-selected-products.js"></script>
                <br />
                <br />
                <p>Η κάρτα θα σταλεί ταχυδρομικά στην οικία σας</p>
                <input id="buy-address" type="text" class="buy-input" placeholder="Διεύθυνση Αποστολής">
                <div id="buy-address-error" class="error-message"></div>
              </div>
              <div class="col-md-3">
                <p>Τελικό ποσό προς πληρωμή: <span id="total-price">€</span></p>
                <input type="button" class="btn btn-grey" value="Συνδεθείτε με την τράπεζά σας">
              </div>
            </div>
          </div>

          <div class="step-screen">
            <div class="container">
              <ul class="progressbar">
                <li class="active">Εισαγωγή Πληροφοριών</li>
                <li class="active">Δημιουργία PIN</li>
                <li class="active">Επιλογή Κομίστρου</li>
                <li class="active">Πληρωμή</li>
                <li class="active">Ολοκλήρωση</li>
              </ul>
            </div>
            <br />
            <br />
            <br />
            <p>Θα σας αποσταλεί email με το αποδεικτικό πληρωμής και οδηγίες παραλαβής της κάρτας σας</p>
            <form id="buy-form" class="hidden-form" method="POST" action="confirm_buy.php">
              <input id="string-to-send" name="buy_cart" class="form-control" type="text">
              <input id="first_name-to-send" name="first_name" class="form-control" type="text">
              <input id="last_name-to-send" name="last_name" class="form-control" type="text">
              <input id="email-to-send" name="email" class="form-control" type="text">
              <input id="dob-to-send" name="dob" class="form-control" type="text">
              <input id="phone-to-send" name="phone" class="form-control" type="text">
              <input id="discount_id-to-send" name="discount_id" class="form-control" type="text">
              <input id="discount_cat-to-send" name="user_category" class="form-control" type="text">
              <input id="pin-to-send" name="pin" class="form-control" type="password">
              <input id="address-to-send" name="address" class="form-control" type="text">
            </form>
            <div id="buy-loader" class="loader"></div> 


          </div>
          <br />

          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="button" class="btn btn-grey" id="prevBtn" onclick="nextPrev(-1)">Προηγούμενο</button>
              <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)" <?php if($message) echo "disabled" ?>>Επόμενο</button>
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
                <li><a href="../../network/info.php" class="py-2 d-block">Πληροφορίες και Χάρτης</a></li>
                <li><a href="../../network/journey_planner.php" class="py-2 d-block">Σχεδιασμός Διαδρομής</a></li>
                <li><a href="../../network/status.php" class="py-2 d-block">Κατάσταση Δικτύου</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Εισιτήρια</h2>
              <ul class="list-unstyled">
                <li><a href="../../tickets/info.php" class="py-2 d-block">Πληροφορίες Εισιτηρίων</a></li>
                <li><a href="../../tickets/buy_online.php" class="py-2 d-block">Ηλεκτρονική Αγορά Εισιτηρίων</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Επιβάτες</h2>
              <ul class="list-unstyled">
                <li><a href="../../passengers/lost_and_found.php" class="py-2 d-block">Απολεσθέντα</a></li>
                <li><a href="../../passengers/amea.php" class="py-2 d-block">ΆμεΑ</a></li>
                <li><a href="../../passengers/complaints.php" class="py-2 d-block">Υποβολη Παραπόνων</a></li>
                <li><a href="../../passengers/help.php" class="py-2 d-block">Βοήθεια</a></li>
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


  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/jquery.easing.1.3.js"></script>
  <script src="../../js/jquery.waypoints.min.js"></script>
  <script src="../../js/jquery.stellar.min.js"></script>
  <script src="../../js/owl.carousel.min.js"></script>
  <script src="../../js/jquery.magnific-popup.min.js"></script>
  <script src="../../js/aos.js"></script>
  <script src="../../js/jquery.animateNumber.min.js"></script>
  <script src="../../js/bootstrap-datepicker.js"></script>
  <script src="../../js/jquery.timepicker.min.js"></script>
  <script src="../../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../../js/google-map.js"></script>
  <script src="../../js/main.js"></script>

  <script src="../../js/buy-card-steps.js"></script>
  <script src="../../js/add-products.js"></script>
    
  </body>
</html>
