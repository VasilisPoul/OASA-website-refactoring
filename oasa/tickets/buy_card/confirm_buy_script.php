<?php

//
// PHP script by: Giorgos Koursiounis (sdi1600077)
//

if(session_status() == PHP_SESSION_NONE) {
  session_start();
}

$username = $first_name = $last_name = $pin = $idticket_category = "";
$email = $dob = $phone = $user_category = $message = "";

$first_name_err = $last_name_err = $pin_err = $idticket_category_err = "";
$email_err = $dob_err = $phone_err = $user_category_err = "";

$date = date("Y-m-d");

$servername = "localhost";
$server_username = "user";
$server_password = "password";
$dbname = "sdi1600077";

if(!empty($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){

  //create connection
  $conn = new mysqli($servername, $server_username, $server_password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  //if looged in check if he already owns a card
  if(isset($_SESSION['loggedin'])){

    $sql = "SELECT * FROM card WHERE iduser = \"" . $_SESSION['loggedin'] . "\"";
    $result = $conn->query($sql);

    if(!empty($result) && $result->num_rows >0){
      $message = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Δεν μπορείτε να εκδόσετε παραπάνω από μια κάρτα ανά χρήστη</div>";
    }
  }

  //check if first name is given
  if(empty($_POST["first_name"])){
    $first_name_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται όνομα</div>";
  } 
  else{
    $first_name = $_POST["first_name"];
  }

  //check if last name is given
  if(empty($_POST["last_name"])){
    $last_name_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται επώνυμο</div>";
  } 
  else{
    $last_name = $_POST["last_name"];
  }

  //check if email is given
  if(empty($_POST["email"])){
    $email_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται email</div>";
  } 
  else{
    $email = $_POST["email"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Λανθασμένη μορφή email</div>";
    }
  }

  //check if phone is given
  if(empty($_POST["phone"])){
    $phone_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται αριθμός τηλεφώνου</div>";
  } 
  else{
    $phone = preg_replace('/[^0-9]/', '', $_POST["phone"]);
    if(strlen($phone) !== 10){
      $phone_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Ο αριθμός τηλεφώνου πρέπει να έχει 10 ψηφία</div>";
    }
  }

  //check if date of birth is given
  if(empty($_POST["dob"])){
    $dob_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Εισάγετε ημερομηνία γέννησης</div>";
  } 
  else{
    $dob = $_POST["dob"];
    if(DateTime::createFromFormat('d-m-Y', $dob)){
      $dob_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Λανθασμένη μορφή ημερομηνίας γέννησης</div>";
    }
  } 

  //check for correct user category
  if(empty($_POST["idticket_category"])){
    $idticket_category_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται κωδικός κατηγορίας</div>";
  } 
  else{
    $idticket_category = $_POST["idticket_category"];
  }

  //check if card pin is given
  if(empty($_POST["pin"])){
    $pin_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται κωδικός PIN</div>";
  } 
  else{
    //CAUTION: pins are hased and then stored in the database
    $pin = password_hash($_POST["pin"], PASSWORD_DEFAULT);
  }

  //check if user category (student etc.) is given
  if(empty($_POST["user_category"])){
    $user_category_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται κατηγορία χρήστη</div>";
  } 
  else{

    $user_category = $_POST["user_category"];

    $sql = "SELECT * FROM user_category WHERE iduser_category = \"$user_category\"";
    $result = $conn->query($sql);

    if(empty($result) || $result->num_rows <=0){
      $user_category_err = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Η κατηγορία χρήστη δεν υπάρχει</div>";
    }
  }

  //check if address is given
  if(empty($_POST["address"])){
    $message = "<div class=\"alert alert-danger\"><strong>Αποτυχία!</strong> Απαιτείται διεύθυνση αποστολής κάρτας</div>";
  } 
  else{
    $address = $_POST["address"];
  }

  //check if there is an error..
  if(empty($first_name_err) && empty($last_name_err) && empty($email_err) && empty($idticket_category_err) &&
     empty($dob_err) && empty($phone_err) && empty($pin_err) && empty($user_category_err) && empty($message))
  {

    //create new user in the database if the user is not logged in
    if(!isset($_SESSION['loggedin'])){
      $sql = "INSERT INTO user (first_name, last_name, email, dob, phone, iduser_category)
      VALUES (\"$first_name\", \"$last_name\", \"$email\", \"$dob\", \"$phone\", \"$user_category\")";
    }

    //if user created..
    if(isset($_SESSION['loggedin']) || $conn->query($sql) === TRUE){
      
      //create new card in the database
      if(isset($_SESSION['loggedin'])){
        $sql = "INSERT INTO card (idticket_category, date, pin, iduser)
        VALUES (\"$idticket_category\", \"$date\", \"$pin\", " . $_SESSION['loggedin'] . ")";
      }
      else{
        $sql = "INSERT INTO card (idticket_category, date, pin)
        VALUES (\"$idticket_category\", \"$date\", \"$pin\")";
      }

      $content = "Αγαπητέ/ή $first_name $last_name,\n   Πραγματοποιήθηκε την $date online αγορά κάρτας με τις παρακάτω λεπτομέρειες:\n<ul>";

      //if card created..
      if($conn->query($sql) === TRUE){
      
        //retrieve id ticket category data
        $sql = "SELECT c.idcard, tc.name, tc.price FROM card c, ticket_category tc WHERE c.idcard = \"$conn->insert_id\" AND tc.idticket_category = c.idticket_category";
        $result = $conn->query($sql);

        if(!empty($result) && $result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            $content .= "<li>Κωδικός κάρτας: " . $row["idcard"] . "\n Τύπος: " . $row["name"] . "\n Τιμή: " . $row["price"] . " €</li>\n</ul>Συνολικό ποσό πληρωμής: <strong>" . $row["price"] . " €</strong>\n";
          }

          $content .= "Η νέα κάρτα θα σας αποσταλεί στην διεύθυνση: $address\n  Με εκτίμηση,\n Οργανισμός Αστικών Συγκοινωνιών Αθηνών (ΟΑΣΑ)\n www.oasa.gr";

          $mailheader = "From: e-tickets@oasa.gr \r\nContent-Type: text/plain; charset=UTF-8 \r\n"; 

          //send email
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
      else{
        die("Error: " . $sql . "<br>" . $conn->error);
      }
    } 
    else{
      die("Error: " . $sql . "<br>" . $conn->error);
    }
  }

  $conn->close();

}
?>
