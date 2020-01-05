<?php

//
// PHP script by: Giorgos Koursiounis (sdi1600077)
//

if(session_status() == PHP_SESSION_NONE) {
    if(session_status() == PHP_SESSION_NONE) {
    	session_start();
	}
}

$servername = "localhost";
$server_username = "user";
$server_password = "password";
$dbname = "oasa";

$tickets = "<table class=\"table\"><thead><tr><th scope=\"col\">#</th><th scope=\"col\">Ονομασία εισιτηρίου</th><th scope=\"col\">Τιμή</th><th scope=\"col\">Κατηγορία</th></tr></thead><tbody>";
 
//create connection
$conn = new mysqli($servername, $server_username, $server_password, $dbname);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

//find all ticket categories
$sql = "SELECT tc.idticket_category, tc.name AS name1, tc.price, uc.name AS name2 FROM ticket_category tc, user_category uc WHERE tc.iduser_category = uc.iduser_category ORDER BY tc.idticket_category";
$result = $conn->query($sql);

$ticket_names = array();
if(!empty($result) && $result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $tickets .= "<tr><td>" . $row["idticket_category"] . "</td><td>" . $row["name1"] . "</td><td>" . $row["price"] . "€</td><td>" . $row["name2"] . "</td></tr>";
    $ticket_names[] = array($row["idticket_category"], $row["name1"], $row["price"]);
  }
}

$tickets .= "</tbody></table>";

$conn->close();

?>
