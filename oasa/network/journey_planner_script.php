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

$coordinates_str = "[";
$message = "";

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
  $sql = "SELECT s.name, s.latitude, s.longitude, cl.colour FROM station s, line_has_station ls, line l, colour cl WHERE s.idstation = ls.idstation AND ls.idline = l.idline AND l.idcolour = cl.idcolour";
  $result = $conn->query($sql);

  $coordinates = array();

  if(!empty($result) && $result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $coordinates[$row["name"]] = [$row["latitude"], $row["longitude"], $row["colour"]];
    }
  }

  if(strtolower($departure) == "ομονοια" && strtolower($arrival) == "ευαγγελισμος")
  {
    //first alternative root
    $coordinates_str .= "[{{lat: " . $coordinates["ΟΜΟΝΟΙΑ"][0] . " , lng: " . $coordinates["ΟΜΟΝΟΙΑ"][1] . "},{colour: " . $coordinates["ΟΜΟΝΟΙΑ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΜΟΝΑΣΤΗΡΑΚΙ"][0] . " , lng: " . $coordinates["ΜΟΝΑΣΤΗΡΑΚΙ"][1] . "},{colour: " . $coordinates["ΜΟΝΑΣΤΗΡΑΚΙ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΣΥΝΤΑΓΜΑ"][0] . " , lng: " . $coordinates["ΣΥΝΤΑΓΜΑ"][1] . "},{colour: " . $coordinates["ΣΥΝΤΑΓΜΑ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΕΥΑΓΓΕΛΙΣΜΟΣ"][0] . " , lng: " . $coordinates["ΕΥΑΓΓΕΛΙΣΜΟΣ"][1] . "},{colour:"  . $coordinates["ΕΥΑΓΓΕΛΙΣΜΟΣ"][2] . "}}]";

    //second alternative root
    $coordinates_str .= "[{{lat: " . $coordinates["ΟΜΟΝΟΙΑ"][0] . " , lng: " . $coordinates["ΟΜΟΝΟΙΑ"][1] . "},{colour: " . $coordinates["ΟΜΟΝΟΙΑ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΠΑΝΕΠΙΣΤΗΜΙΟ"][0] . " , lng: " . $coordinates["ΠΑΝΕΠΙΣΤΗΜΙΟ"][1] . "},{colour: " . $coordinates["ΠΑΝΕΠΙΣΤΗΜΙΟ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΣΥΝΤΑΓΜΑ"][0] . " , lng: " . $coordinates["ΣΥΝΤΑΓΜΑ"][1] . "},{colour: " . $coordinates["ΣΥΝΤΑΓΜΑ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΕΥΑΓΓΕΛΙΣΜΟΣ"][0] . " , lng: " . $coordinates["ΕΥΑΓΓΕΛΙΣΜΟΣ"][1] . "},{colour:"  . $coordinates["ΕΥΑΓΓΕΛΙΣΜΟΣ"][2] . "}}]";
  }
  else if(strtolower($departure) == "κεραμεικος" && strtolower($arrival) == "πανεπιστημιο")
  {
    //first alternative root
    $coordinates_str .= "[{{lat: " . $coordinates["ΚΕΡΑΜΕΙΚΟΣ"][0] . " , lng: " . $coordinates["ΚΕΡΑΜΕΙΚΟΣ"][1] . "},{colour: " . $coordinates["ΚΕΡΑΜΕΙΚΟΣ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΜΟΝΑΣΤΗΡΑΚΙ"][0] . " , lng: " . $coordinates["ΜΟΝΑΣΤΗΡΑΚΙ"][1] . "},{colour: " . $coordinates["ΜΟΝΑΣΤΗΡΑΚΙ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΣΥΝΤΑΓΜΑ"][0] . " , lng: " . $coordinates["ΣΥΝΤΑΓΜΑ"][1] . "},{colour: " . $coordinates["ΣΥΝΤΑΓΜΑ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΠΑΝΕΠΙΣΤΗΜΙΟ"][0] . " , lng: " . $coordinates["ΠΑΝΕΠΙΣΤΗΜΙΟ"][1] . "},{colour:"  . $coordinates["ΠΑΝΕΠΙΣΤΗΜΙΟ"][2] . "}}]";

    //second alternative root
    $coordinates_str .= "[{{lat: " . $coordinates["ΚΕΡΑΜΕΙΚΟΣ"][0] . " , lng: " . $coordinates["ΚΕΡΑΜΕΙΚΟΣ"][1] . "},{colour: " . $coordinates["ΚΕΡΑΜΕΙΚΟΣ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΜΟΝΑΣΤΗΡΑΚΙ"][0] . " , lng: " . $coordinates["ΜΟΝΑΣΤΗΡΑΚΙ"][1] . "},{colour: " . $coordinates["ΜΟΝΑΣΤΗΡΑΚΙ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΟΜΟΝΟΙΑ"][0] . " , lng: " . $coordinates["ΟΜΟΝΟΙΑ"][1] . "},{colour: " . $coordinates["ΟΜΟΝΟΙΑ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΠΑΝΕΠΙΣΤΗΜΙΟ"][0] . " , lng: " . $coordinates["ΠΑΝΕΠΙΣΤΗΜΙΟ"][1] . "},{colour:"  . $coordinates["ΠΑΝΕΠΙΣΤΗΜΙΟ"][2] . "}}]";
  }
  else if(strtolower($departure) == "βικτωρια" && strtolower($arrival) == "θησειο")
  {
    $coordinates_str .= "[{{lat: " . $coordinates["ΒΙΚΤΩΡΙΑ"][0] . " , lng: " . $coordinates["ΒΙΚΤΩΡΙΑ"][1] . "},{colour: " . $coordinates["ΒΙΚΤΩΡΙΑ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΟΜΟΝΟΙΑ"][0] . " , lng: " . $coordinates["ΟΜΟΝΟΙΑ"][1] . "},{colour: " . $coordinates["ΟΜΟΝΟΙΑ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΜΟΝΑΣΤΗΡΑΚΙ"][0] . " , lng: " . $coordinates["ΜΟΝΑΣΤΗΡΑΚΙ"][1] . "},{colour: " . $coordinates["ΜΟΝΑΣΤΗΡΑΚΙ"][2] . "}}";
    $coordinates_str .= "{{lat: " . $coordinates["ΘΗΣΕΙΟ"][0] . " , lng: " . $coordinates["ΘΗΣΕΙΟ"][1] . "},{colour:"  . $coordinates["ΘΗΣΕΙΟ"][2] . "}}]";
  }
  else
  {
    $message = "Λυπούμαστε η διαδρομή δεν βρέθηκε!";
  }

  $conn->close();
}

$coordinates_str .= "]";

?>