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
$dbname = "oasa";

$date = date("Y-m-d");

$email = $idticket = $idticket_category = $message = "";
$email_err = $idticket_err = $idticket_category_err = "";


if(!empty($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_SESSION['loggedin'])){
    $content = "Αγαπητέ/ή ". $_SESSION['first_name']. " " . $_SESSION['last_name'] . ",\n   Πραγματοποιήθηκε την $date online επαναφόρτιση εισιτηρίου με τις παρακάτω λεπτομέρειες:\n<ul>";
  }
  else{
    $content = "Αγαπητέ/ή χρήστη,\n   Πραγματοποιήθηκε την $date online επαναφόρτιση εισιτηρίου με τις παρακάτω λεπτομέρειες:\n<ul>";
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

  if(empty($_POST["idticket"])){
    $idticket_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται κωδικός εισιτηρίου</div>";
  } 
  else{
    $idticket = $_POST["idticket"];
  }

  if(empty($_POST["idticket_category"])){
    $idticket_category_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται κωδικός κατηγορίας</div>";
  } 
  else{
    $idticket_category = $_POST["idticket_category"];
  }


  if(empty($email_err) && empty($idticket_err) && empty($idticket_category)){

    $sql = "UPDATE ticket SET date = \"$date\", idticket_category = \"$idticket_category\", expired = 0 WHERE idticket = \"$idticket\"";

    if($conn->query($sql) === TRUE){

      $sql = "SELECT t.idticket, tc.name, tc.price FROM ticket t, ticket_category tc WHERE t.idticket = \"$idticket\" AND tc.idticket_category = t.idticket_category";
      $result = $conn->query($sql);

      if(!empty($result) && $result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $content .= "<li>Κωδικός εισιτηρίου: " . $row["idticket"] . "\n Τύπος: " . $row["name"] . "\n Τιμή: " . $row["price"] . " €</li>\n";
        }
      }
      else{
        die("Error: " . $sql . "<br>" . $conn->error);
      }

      $content .= "</ul>Συνολικό ποσό πληρωμής: <strong>" . $row["price"] . " €</strong>\n Με εκτίμηση,\n Οργανισμός Αστικών Συγκοινωνιών Αθηνών (ΟΑΣΑ)\n www.oasa.gr";

      if(mail($email, "OASA tickets", $content, $mailheader)){
        $message = "<div class=\"alert alert-success\"><strong>Επιτυχία!</strong> Η συναλλαγή ολοκληρώθηκε! Σας έχει αποσταλεί σχετικό email</div>";
      }
      else{
        $message = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Η αποστολή email απέτυχε και θα επαναληφθεί το συντομότερο δυνατό <br /> SMTP Server Error </div>";
      }
    }
    else{
      die("Error: " . $sql . "<br>" . $conn->error);
    } 
  }

  $conn->close();

}
else{
  $message = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Δεν έχετε συμπληρώσει τη φόρμα επαναφόρτισης εισιτήριων</div>";
}
?>
