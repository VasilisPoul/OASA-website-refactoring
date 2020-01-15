<?php

//
// PHP script by: Maria Karamina (sdi1600059)
//

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
if(!isset($_SESSION['loggedin'])){
	$user_category = "";
}
else {
	$servername = "localhost";
	$server_username = "user";
	$server_password = "password";
	$dbname = "sdi1600077";

	$iduser = $_SESSION['loggedin'];
	$user_category = "";

	//create connection
	$conn = new mysqli($servername, $server_username, $server_password, $dbname);
	if($conn->connect_error){
	  die("Connection failed: " . $conn->connect_error);
	}


	//get user category
	$sql = "SELECT u.iduser_category FROM user u WHERE u.iduser = $iduser";
	$result = $conn->query($sql);

	if(!empty($result) && $result->num_rows > 0){
	  while($row = $result->fetch_assoc()){
	    $user_category = $row["iduser_category"];
	  }
	}
	
	$conn->close();
}



?>
