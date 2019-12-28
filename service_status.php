

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  



<?php

$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "oasa";

$delays = "";
$strikes = "";
$planned_work = "";
$good_service = "";
$out_of_order = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

//find delays
$sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Καθυστερήσεις\" AND l.idcolour = c.idcolour";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
      // foreach ($row as $field => $value){ 
      //   echo "<td>" . $value . "</td>"; 
    $delays .= "<button type=\"button\" class=\"btn disabled\" style=\"color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button></br>";
  }
}


//find strikes
$sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Απεργίες\" AND l.idcolour = c.idcolour";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
      // foreach ($row as $field => $value){ 
      //   echo "<td>" . $value . "</td>"; 
    $strikes .= "<button type=\"button\" class=\"btn disabled\" style=\"color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button></br>";
  }
}


//find planned work
$sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Έργα σε εξέλιξη\" AND l.idcolour = c.idcolour";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
      // foreach ($row as $field => $value){ 
      //   echo "<td>" . $value . "</td>"; 
    $planned_work .= "<button type=\"button\" class=\"btn disabled\" style=\"color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button></br>";
  }
}


//find good service
$sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Ομαλή λειτουργία\" AND l.idcolour = c.idcolour";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
      // foreach ($row as $field => $value){ 
      //   echo "<td>" . $value . "</td>"; 
    $good_service .= "<button type=\"button\" class=\"btn disabled\" style=\"color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button></br>";
  }
}



//find planned work
$sql = "SELECT l.name, c.colour FROM line_status ls, line l, colour c WHERE ls.idline_status = l.idline_status AND ls.status = \"Εκτός λειτουργίας\" AND l.idcolour = c.idcolour";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
      // foreach ($row as $field => $value){ 
      //   echo "<td>" . $value . "</td>"; 
    $out_of_order .= "<button type=\"button\" class=\"btn disabled\" style=\"color:White;background-color:" . $row["colour"] . ";\">" . $row["name"] . "</button></br>";
  }
}




$conn->close();
?> 

<span><?php echo $good_service;?></span>

</body>
</html>