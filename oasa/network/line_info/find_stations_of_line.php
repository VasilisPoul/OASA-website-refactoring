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
$line_str = $idline = $idline_err = "";

if(!empty($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){

  //check if departure point is given
  if(empty($_GET["idline"])){
    $idline_err = "Απαιτείται κωδικός γραμμής";
  } 
  else{
    $idline = $_GET["idline"];
  }

  //create connection
  $conn = new mysqli($servername, $server_username, $server_password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  //find details of a line
  $sql = "SELECT l.name AS line_name, t.name AS transport_name, c.colour, ls.status FROM line l, transport t, colour c, line_status ls WHERE l.idline = $idline AND l.idtransport = t.idtransport AND l.idcolour = c.idcolour AND l.idline_status = ls.idline_status";
  $result = $conn->query($sql);

  if(!empty($result) && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $line_str = "[\"" . $row["line_name"] . "\",\"" . $row["transport_name"] . "\",\"" . $row["colour"] . "\",\"" . $row["status"] . "\"]";
    }
  }

  //find stations of a line
  $sql = "SELECT s.idstation, s.name, s.latitude, s.longitude, a.idarea, a.area FROM station s, area a, line_has_station ls WHERE ls.idline = $idline AND s.idstation = ls.idstation AND s.idarea = a.idarea";
  $result = $conn->query($sql);

  $counter = 1;
  if(!empty($result) && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $stations_str .= "[" . $row["idstation"] . ",\"" . $row["name"] . "\"," . $row["latitude"] . "," . $row["longitude"] . "," . $row["idarea"] . ",\"" . $row["area"] . "\"]";

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
