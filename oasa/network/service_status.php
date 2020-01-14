<?php

//
// PHP script by: Giorgos Koursiounis (sdi1600077)
//

session_start();

$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "sdi1600077";

$delays = "";
$strikes = "";
$planned_work = "";
$good_service = "";
$out_of_order = "";

//attempt connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}


//find lines with delay
$sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Καθυστερήσεις\" AND l.idcolour = c.idcolour";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $delays .= "<button type=\"button\" class=\"btn disabled\" style=\"margin: 2px;color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button>";
  }
}

//find lines with strike
$sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Απεργίες\" AND l.idcolour = c.idcolour";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){

    $strikes .= "<button type=\"button\" class=\"btn disabled\" style=\"margin: 2px;color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button>";
  }
}


//find lines with planned work
$sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Έργα σε εξέλιξη\" AND l.idcolour = c.idcolour";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $planned_work .= "<button type=\"button\" class=\"btn disabled\" style=\"margin: 2px;color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button>";
  }
}


//find lines with good service
$sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Ομαλή λειτουργία\" AND l.idcolour = c.idcolour";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $good_service .= "<button type=\"button\" class=\"btn disabled\" style=\"margin: 2px;color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button>";
  }
}

//find lines which are out of order
$sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Εκτός λειτουργίας\" AND l.idcolour = c.idcolour";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $out_of_order .= "<button type=\"button\" class=\"btn disabled\" style=\"margin: 2px;color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button>";
  }
}

//close connection to the database
$conn->close();

?> 
