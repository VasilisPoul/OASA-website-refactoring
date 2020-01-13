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

$stations_str = "[";
$area_str = $idarea = $idarea_err = "";

if(!empty($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){

  //check if departure point is given
  if(empty($_GET["idarea"])){
    $idarea_err = "Απαιτείται κωδικός περιοχής";
  } 
  else{
    $idarea = $_GET["idarea"];
  }

  //create connection
  $conn = new mysqli($servername, $server_username, $server_password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  //find details of an area
  $sql = "SELECT a.area, a.city, a.postal_code FROM area a WHERE a.idarea = $idarea";
  $result = $conn->query($sql);
  if(!empty($result) && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $area_str = "[\"" . $row["area"] . "\",\"" . $row["city"] . "\",\"" . $row["postal_code"] . "\"]";
    }
  }

  //find stations of an area
  $sql = "SELECT s.idstation, s.name, s.latitude, s.longitude FROM station s, area a WHERE a.idarea = $idarea AND s.idarea = a.idarea";
  $result = $conn->query($sql);

  $counter = 1;
  if(!empty($result) && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $stations_str .= "[" . $row["idstation"] . ",\"" . $row["name"] . "\"," . $row["latitude"] . "," . $row["longitude"] . "]";

      if(mysqli_num_rows($result) != $counter)
      {
        $stations_str .= ",";
      }
      $counter++;
    }
  }

  $stations_str .= "]";

  $conn->close();
}
?>
