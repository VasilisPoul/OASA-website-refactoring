<?php

session_start();

$servername = "localhost";
$server_username = "user";
$server_password = "password";
$dbname = "oasa";

$date = date("Y-m-d");

$email = $buy_cart = "";
$email_err = $buy_cart_err = "";

$total_amount = 0.0;


if(!empty($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_SESSION['loggedin'])){
    $content = "Αγαπητέ/ή ". $_SESSION['first_name']. " " . $_SESSION['last_name'] . ",\n   Πραγματοποιήθηκε την $date online αγορά των παρακάτω εισιτηρίων:\n<ul>";
  }
  else{
    $content = "Αγαπητέ/ή χρήστη,\n   Πραγματοποιήθηκε την $date online αγορά των παρακάτω εισιτηρίων:\n<ul>";
  }

  $mailheader = "From: e-tickets@oasa.gr \r\nContent-Type: text/plain; charset=UTF-8 \r\n"; 

  $conn = new mysqli($servername, $server_username, $server_password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  if(empty($_POST["email"])){
    $email_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται email</div>";
  } 
  else{;
    $email = $_POST["email"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Λανθασμένη μορφή email</div>";
    }
  }

  if(empty($_POST["buy_cart"])){
    $buy_cart_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Το καλάθι αγορών είναι άδειο</div>";
  } 
  else{
    $buy_cart = str_replace("^","\"",$_POST["buy_cart"]);
    $buy_cart = json_decode($buy_cart, true);
  }

  if(empty($email_err) && empty($buy_cart_err)){

    foreach ($buy_cart as $idticket_category => $quantity){

      $sql = "SELECT * FROM ticket_category WHERE idticket_category = \"$idticket_category\"";
      $result = $conn->query($sql);

      if(!empty($result) && $result->num_rows > 0){
        
        if(isset($_SESSION['loggedin'])){

          $iduser = $_SESSION['loggedin'];

          $sql = "INSERT INTO ticket (quantity, date, iduser, idticket_category)
          VALUES (\"$quantity\", \"$date\", \"$iduser\", \"$idticket_category\")";
        }
        else{
          $sql = "INSERT INTO ticket (quantity, date, idticket_category)
          VALUES (\"$quantity\", \"$date\", \"$idticket_category\")";
        }

        if($conn->query($sql) === TRUE){

          $sql = "SELECT t.idticket, tc.name, tc.price FROM ticket t, ticket_category tc WHERE t.idticket = \"$conn->insert_id\" AND tc.idticket_category = t.idticket_category";
          $result = $conn->query($sql);

          if(!empty($result) && $result->num_rows > 0){
            while($row = $result->fetch_assoc()){
              $content .= "<li>Κωδικός εισιτηρίου: " . $row["idticket"] . "\n Τύπος: " . $row["name"] . "\n Τιμή: " . $row["price"] . " €</li>\n";
              $total_amount += $row["price"];
            }
          }
          else{
            die("Error: " . $sql . "<br>" . $conn->error);
          }

        }
        else{
          die("Error: " . $sql . "<br>" . $conn->error);
        } 
      }
      else{
        $buy_cart_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Η κατηγορία εισιτηρίου δεν υπάρχει</div>";
      }
    }

    $content .= "</ul>Συνολικό ποσό πληρωμής: <strong>$total_amount €</strong>\n Με εκτίμηση,\n Οργανισμός Αστικών Συγκοινωνιών Αθηνών (ΟΑΣΑ)\n www.oasa.gr";

    mail($email, "OASA tickets", $content, $mailheader) or die("Error sending email");

    $buy_cart_err = "<div class=\"alert alert-success\"><strong>Επιτυχία!</strong> Η συναλλαγή ολοκληρώθηκε! Σας έχει αποσταλεί σχετικό email</div>";
  }
  else{
    $buy_cart_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Τα στοιχεία που δώθηκαν δεν είναι σωστά. Προσπαθήστε ξανά</div>";
  }

  $conn->close();

}
else{
  $buy_cart_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Δεν έχετε συμπληρώσει τη φόρμα αγοράς εισιτήριων</div>";
}
?>