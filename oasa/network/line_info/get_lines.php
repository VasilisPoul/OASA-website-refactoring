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
$dbname = "oasa";
 
//create connection
$conn = new mysqli($servername, $server_username, $server_password, $dbname);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

//get stations sorted by area
$sql = "SELECT ln.idline, ln.name FROM line ln ORDER BY ln.name";
$result = $conn->query($sql);

$lines = array();
if(!empty($result) && $result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $lines[] = array($row["idline"], $row["name"]);
  }
}

$conn->close();

?>