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

$lines_str = "[";
$station_str = $idstation = $idstation_err = "";

if(!empty($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){

  //check if departure point is given
  if(empty($_GET["idstation"])){
    $idstation_err = "Απαιτείται κωδικός στάσης";
  } 
  else{
    $idstation = $_GET["idstation"];
  }

  //create connection
  $conn = new mysqli($servername, $server_username, $server_password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  //find details of a station
  $sql = "SELECT st.name, st.latitude, st.longitude, st.disability_access FROM station st WHERE st.idstation = $idstation";
  $result = $conn->query($sql);

  if(!empty($result) && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $station_str = "[\"" . $row["name"] . "\"," . $row["latitude"] . "," . $row["longitude"] . "," . $row["disability_access"] . "]";
    }
  }

  //find lines of a station
  $sql = "SELECT l.idline, l.name, c.colour FROM line l, line_has_station ls, colour c WHERE ls.idstation = $idstation AND l.idline = ls.idline AND l.idcolour = c.idcolour";
  $result = $conn->query($sql);

  $counter = 1;
  if(!empty($result) && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $lines_str .= "[" . $row["idline"] . ",\"" . $row["name"] . "\",\"" . $row["colour"] . "\"]";

      if(mysqli_num_rows($result) != $counter)
      {
        $lines_str .= ",";
      }
      $counter++;
    }
  }

  $lines_str .= "]";


  $conn->close();
}
?>
