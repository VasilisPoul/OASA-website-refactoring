<?php

//
// PHP script by: Giorgos Koursiounis (sdi1600077)
//

if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
 
if(!isset($_SESSION['loggedin'])){
	$username = $first_name = $last_name = $email = $dob = $phone = $user_category = $discountid = "";
}
else {
	$servername = "localhost";
	$server_username = "user";
	$server_password = "password";
	$dbname = "sdi1600077";

	$username = $_SESSION['username'];
	$first_name = $_SESSION['first_name'];
	$last_name = $_SESSION['last_name'];
	$email = $_SESSION['email'];
	$dob = $phone = $user_category = $discountid = "";

	//create connection
	$conn = new mysqli($servername, $server_username, $server_password, $dbname);
	if($conn->connect_error){
	  die("Connection failed: " . $conn->connect_error);
	}


	//obtain user details
	$sql = "SELECT u.phone, u.dob, u.iduser_category FROM user u WHERE u.iduser = " . $_SESSION['loggedin'];
	$result = $conn->query($sql);

	if(!empty($result) && $result->num_rows > 0){
	  while($row = $result->fetch_assoc()){
	    $dob = $row["dob"];
	    $phone = $row["phone"];
	    $user_category = $row["iduser_category"];
	  }
	}

	$conn->close();
}



?>
