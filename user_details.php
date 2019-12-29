
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
session_start();
 
if(!isset($_SESSION['loggedin'])){
  exit;
}

$servername = "localhost";
$server_username = "user";
$server_password = "password";
$dbname = "oasa";

$username = $_SESSION['username'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email = $_SESSION['email'];
$dob = $phone = $user_category = "";

//create connection
$conn = new mysqli($servername, $server_username, $server_password, $dbname);
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT u.phone, u.dob, ic.name FROM user u, iduser_category ic WHERE u.iduser = " . $_SESSION['loggedin'] . " AND u.iduser_category = ic.iduser_category";
$result = $conn->query($sql);

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $dob = $row["$dob"];
    $phone = $row["$phone"];
    $user_category = $row["$name"];
  }
}
$conn->close();

?>