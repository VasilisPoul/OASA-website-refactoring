<?php

//
// PHP script by: Giorgos Koursiounis (sdi1600077)
//

session_start();
 
//if already logged in then redirect
if(isset($_SESSION['loggedin'])){
  echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];
}

$servername = "localhost";
$server_username = "user";
$server_password = "password";
$dbname = "oasa";

$stations = "<table class="table"><thead><tr><th scope="col">#</th><th scope="col">Όνομα σταθμού/στάσης</th></tr></thead><tbody>";
 
//create connection
$conn = new mysqli($servername, $server_username, $server_password, $dbname);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

//check if given username exists
$sql = "SELECT * FROM station s WHERE  disability_access = 1";
$result = $conn->query($sql);

if(!empty($result) && $result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $stations .= "<tr><td>" . $row["idstation"] . "</td><td>" . $row["name"] . "</td></tr>";
  }
}

$stations .= "</tbody></table>";

$conn->close();

?>
