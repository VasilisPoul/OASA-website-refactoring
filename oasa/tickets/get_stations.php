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
 
//create connection
$conn = new mysqli($servername, $server_username, $server_password, $dbname);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

//get stations sorted by area
$sql = "SELECT st.idstation, st.name, st.area FROM station st ORDER BY st.area";
$result = $conn->query($sql);

$stations = array();
if(!empty($result) && $result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $stations[] = array($row["idstation"], $row["name"], $row["area"]);
  }
}

$conn->close();

?>