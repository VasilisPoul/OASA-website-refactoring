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

$transport = "<table class=\"table\"><thead><tr><th scope=\"col\">#</th><th scope=\"col\">Μέσο μεταφοράς</th></tr></thead><tbody>";
 
//create connection
$conn = new mysqli($servername, $server_username, $server_password, $dbname);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

//find all transports available
$sql = "SELECT * FROM transport";
$result = $conn->query($sql);

if(!empty($result) && $result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $transport .= "<tr><td>" . $row["idtransport"] . "</td><td>" . $row["name"] . "</td></tr>";
  }
}

$transport .= "</tbody></table>";

$conn->close();

?>
