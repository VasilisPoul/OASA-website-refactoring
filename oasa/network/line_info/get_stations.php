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
$dbname = "sdi1600077";
 
//create connection
$conn = new mysqli($servername, $server_username, $server_password, $dbname);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

//get stations sorted by name
$sql = "SELECT st.idstation, st.name, a.area FROM station st, area a WHERE st.idarea = a.idarea ORDER BY st.name";
$result = $conn->query($sql);

$stations = array();
if(!empty($result) && $result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $stations[] = array($row["idstation"], $row["name"], $row["area"]);
  }
}

$conn->close();

?>