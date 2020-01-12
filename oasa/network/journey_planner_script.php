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

$departure = $arrival = "";
$departure_err = $arrival_err = "";

if(!empty($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){

  //check if departure point is given
  if(empty($_POST["departure"])){
    $departure_err = "Απαιτείται σημείο αναχώρησης";
  } 
  else{
    $departure = $_POST["departure"];
  }

  //check if arrival point is given
  if(empty($_POST["arrival"])){
    $arrival_err = "Απαιτείται σημείο άφιξης";
  } 
  else{
    $arrival = $_POST["arrival"];
  }
   
  //create connection
  $conn = new mysqli($servername, $server_username, $server_password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  //find all coordinates of all stations
  $sql = "SELECT * FROM station";
  $result = $conn->query($sql);

  if(!empty($result) && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      
      if($departure == "Ομόνοια" && $arrival == "Ευαγγελισμός")
      {
        
      }
    }
  }

  $conn->close();
}
?>
