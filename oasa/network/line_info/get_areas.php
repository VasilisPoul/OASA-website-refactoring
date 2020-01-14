<?php

//
// PHP script by: Maria Karamina (sdi1600059)
//

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}

$servername = "localhost";
$server_username = "user";
$server_password = "password";
$dbname = "sdi1600077";
 
//create connection
$conn = new mysqli($servername, $server_username, $server_password, $dbname);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

//get areas sorted by area name
$sql = "SELECT a.idarea, a.area, a.city FROM area a ORDER BY a.area";
$result = $conn->query($sql);

$areas = array();
if(!empty($result) && $result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $areas[] = array($row["idarea"], $row["area"], $row["city"]);
  }
}

$conn->close();

?>