<?php

//
// PHP script by: Giorgos Koursiounis (sdi1600077)
//

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

$servername = "localhost";
$server_username = "user";
$server_password = "password";
$dbname = "sdi1600077";

$date = date("Y-m-d");
$total_amount = 0.0;

$email = $idcard = $idticket_category = $message = "";
$email_err = $idcard_err = $idticket_category_err = $pin_err = "";


if(!empty($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_SESSION['loggedin'])){
    $content = "Αγαπητέ/ή ". $_SESSION['first_name']. " " . $_SESSION['last_name'] . ",\n   Πραγματοποιήθηκε την $date online επαναφόρτιση κάρτας με τις παρακάτω λεπτομέρειες:\n<ul>";
  }
  else{
    $content = "Αγαπητέ/ή χρήστη,\n   Πραγματοποιήθηκε την $date online επαναφόρτιση κάρτας με τις παρακάτω λεπτομέρειες:\n<ul>";
  }

  $mailheader = "From: e-tickets@oasa.gr \r\nContent-Type: text/plain; charset=UTF-8 \r\n"; 


  $conn = new mysqli($servername, $server_username, $server_password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }


  if(empty($_POST["email"])){
    $email_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται email</div>";
  } 
  else{
    $email = $_POST["email"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Λανθασμένη μορφή email</div>";
    }
  }

  if(empty($_POST["idcard"])){
    $idcard_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται κωδικός κάρτας</div>";
  } 
  else{
    $idcard = $_POST["idcard"];
  }

  if(empty($_POST["idticket_category"])){
    $idticket_category_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται κωδικός κατηγορίας</div>";
  } 
  else{
    $idticket_category = $_POST["idticket_category"];
  }

  if(empty($_POST["pin"])){
    $pin_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται κωδικός PIN</div>";
  }

  if(empty($email_err) && empty($idticket_category_err) && empty($idcard_err) && empty($pin_err)){

    $sql = "SELECT c.date, c.pin, tc.name, tc.price FROM card c, ticket_category tc WHERE c.idcard = $idcard AND c.idticket_category = tc.idticket_category";
    $result = $conn->query($sql);

    if(!empty($result) && $result->num_rows > 0){
      while($row = $result->fetch_assoc()){

        if(password_verify($_POST["pin"], $row["pin"])){
          
          $sql1 = "UPDATE card SET date = \"$date\", idticket_category = \"$idticket_category\", expired = 0 WHERE idcard = \"$idcard\"";

          if($conn->query($sql1) === TRUE){
            $content .= "<li>Κωδικός κάρτας: " . $idcard . "\n Τύπος: " . $row["name"] . "\n Τιμή: " . $row["price"] . " €</li>\n</ul>Συνολικό ποσό πληρωμής: <strong>" . $row["price"] . " €</strong>\n Με εκτίμηση,\n Οργανισμός Αστικών Συγκοινωνιών Αθηνών (ΟΑΣΑ)\n www.oasa.gr";

            if(mail($email, "OASA tickets", $content, $mailheader)){
              $message = "<div class=\"alert alert-success\"><strong>Επιτυχία!</strong> Η συναλλαγή ολοκληρώθηκε! Σας έχει αποσταλεί σχετικό email</div>";
            }
            else{
              $message = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Η αποστολή email απέτυχε και θα επαναληφθεί το συντομότερο δυνατό <br /> SMTP Server Error </div>";
            }
          }
        }
        else{
          $error = "Ο κωδικός PIN δεν είναι σωστός";
        }
      }
    }
    else{
      $error = "Η κάρτα δεν βρέθηκε";
    }
  }
  $conn->close();

}
else{
  $message = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Δεν έχετε συμπληρώσει τη φόρμα επαναφόρτισης κάρτας</div>";
}
?>
