<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

session_start();

if(isset($_SESSION['loggedin'])){
  echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];
}

$servername = "localhost";
$server_username = "user";
$server_password = "password";
$dbname = "oasa";

$date = date("Y-m-d");
$message = $email = "";
$total_amount = 0.0;


if(isset($_SESSION['loggedin'])){
  $content = "Αγαπητέ/ή ". $_SESSION['first_name']. " " . $_SESSION['last_name'] . ",\n   Πραγματοποιήθηκε την $date online αγορά των παρακάτω εισιτηρίων:\n<ul>";
}
else{
  $content = "Αγαπητέ/ή χρήστη,\n   Πραγματοποιήθηκε την $date online αγορά των παρακάτω εισιτηρίων:\n";
}

header('Content-Type: application/json');
$mailheader = "From: e-tickets@oasa.gr \r\nContent-Type: text/plain; charset=UTF-8 \r\n"; 

$conn = new mysqli($servername, $server_username, $server_password, $dbname);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_SESSION['buy_cart'])){

  $cart = $_SESSION['buy_cart'];

  foreach($cart as $idticket => $quantity){

    if(isset($_SESSION['loggedin'])){

      $iduser = $_SESSION['loggedin'];

      $sql = "INSERT INTO user (quantity, date, iduser, idticket_category)
      VALUES (\"$quantity\", \"$date\", \"$iduser\", \"$idticket\")";
    }
    else{
      $sql = "INSERT INTO user (quantity, date, idticket_category)
      VALUES (\"$quantity\", \"$date\", \"$idticket\")";
    }

    if($conn->query($sql) === TRUE){

      $sql = "SELECT t.idticket, tc.name, tc.price FROM ticket t, ticket_category tc WHERE t.idticket = \"$idticket\" AND tc.idticket_category = t.idticket_category";
      $result = $conn->query($sql);

      if(!empty($result) && $result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $content .= "<li>Κωδικός εισιτηρίου:" . $row["$idticket"] . " Τύπος: " . $row["$name"] . " Τιμή: " . $row["$price"] . " </li>\n";
          $total_amount += $row["$price"];
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

  $content .= "</ul>Συνολικό ποσό πληρωμής: <strong>$total_amount</strong>\n Με εκτίμηση,\n Οργανισμός Αστικών Συγκοινωνιών Αθηνών (ΟΑΣΑ)\n www.oasa.gr";

  if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
  }

  mail($email, "OASA tickets", $content, $mailheader) or die("Error sending email");

  $message = "All good";
}
else{
  $message = "No buy cart";
}

$conn->close();

?>

<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">

  email: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $message;?></span>
  <br><br>


  <input type="submit" name="submit" value="Submit">  
</form>


</body>
</html>
