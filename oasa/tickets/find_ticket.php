<?php

//
// PHP script by: Giorgos Koursiounis (sdi1600077)
//

session_start();

$servername = "localhost";
$server_username = "user";
$server_password = "password";
$dbname = "oasa";

$date = $tick_category_name = $error = "";
$price = $user_cat_name = $expired = $idticket = "";

if(!empty($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
 
  //create connection
  $conn = new mysqli($servername, $server_username, $server_password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  //find ticket on database based on its id
  $sql = "SELECT t.date, t.expired , tc.name AS tick_category_name, tc.price, uc.name AS user_cat_name FROM ticket t, ticket_category tc, user_category uc WHERE t.idticket = \"$idticket\" AND t.idticket_category = tc.idticket_category AND tc.iduser_category = uc.iduser_category";
  $result = $conn->query($sql);

  if(!empty($result) && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      if($row["expired"] === 1){

        $date = $row["date"];
        $tick_category_name = $row["tick_category_name"];
        $price = $row["price"];
        $user_cat_name = $row["user_cat_name"];

      }
      else{
        $error = "Δεν μπορείτε να επαναφορτίσετε εισιτήριο που δεν έχει λήξει";
      }
    }
  }
  else{
    $error = "Το εισιτήριο δεν βρέθηκε";
  }

  $conn->close();
}

?>
