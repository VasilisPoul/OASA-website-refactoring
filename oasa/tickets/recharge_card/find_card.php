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

$date = $tick_category_name = $error = "";
$price = $user_cat_name = $expired = $idcard = "";

if(!empty($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
 
  //create connection
  $conn = new mysqli($servername, $server_username, $server_password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  //check if card id is given
  if(empty($_POST["idcard"])){
    $error = "Εισάγετε κωδικό κάρτας";
  } 
  else{
    $idcard = $_POST["idcard"];
  }

  //check if card PIN is given
  if(empty($_POST["pin"])){
    $error = "Εισάγετε κωδικό κάρτας";
  }

  if(empty($error)){

    //find ticket on database based on its id
    $sql = "SELECT c.date, c.pin, c.expired, tc.name AS tick_category_name, tc.price, uc.name AS user_cat_name FROM card c, ticket_category tc, user_category uc WHERE c.idcard = $idcard AND c.idticket_category = tc.idticket_category AND tc.iduser_category = uc.iduser_category";
    $result = $conn->query($sql);

    if(!empty($result) && $result->num_rows > 0){
      while($row = $result->fetch_assoc()){

        if(password_verify($_POST["pin"], $row["pin"])){
          if($row["expired"] == 1){

            $date = $row["date"];
            $tick_category_name = $row["tick_category_name"];
            $price = $row["price"];
            $user_cat_name = $row["user_cat_name"];

          }
          else{
            $error = "Δεν μπορείτε να επαναφορτίσετε κάρτα με κόμιστρο που δεν έχει λήξει";
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

?>
