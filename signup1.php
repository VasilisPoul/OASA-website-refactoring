
<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$username = $first_name = $last_name = $password = "";
$email = $dob = $phone = $occupation_id = "";

$username_err = $first_name_err = $last_name_err = $password_err = "";
$email_err = $dob_err = $phone_err = $occupation_id_err = "";

$servername = "localhost";
$server_username = "user";
$server_password = "password";
$dbname = "oasa";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  //create connection
  $conn = new mysqli($servername, $server_username, $server_password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  if(empty($_POST["username"])){
    $username_err = "Username is required";
  } 
  else{
    $username = $_POST["username"];
  }

  //check if username exists
  $sql = "SELECT * FROM user WHERE username = \"$username\"";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    $username_err = "Username already exists";
  }

  //create new user in the database
  if(empty($_POST["first_name"])){
    $first_name_err = "First name is is required";
  } 
  else{
    $first_name = $_POST["first_name"];
  }

  if(empty($_POST["last_name"])){
    $last_name_err = "Last name is required";
  } 
  else{
    $last_name = $_POST["last_name"];
  }

  if(empty($_POST["email"])){
    $email_err = "Email is required";
  } 
  else{
    $email = $_POST["email"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Invalid email format";
    }
  }

  if(empty($_POST["phone"])){
    $phone_err = "Phone is required";
  } 
  else{
    $phone = preg_replace('/[^0-9]/', '', $_POST["phone"]);
    if(strlen($phone) !== 10){
      $phone_err = "Invalid phone format";
    }
  }

  if(empty($_POST["dob"])){
    $dob_err = "Date of birth is required";
  } 
  else{
    $dob = $_POST["dob"];
    if(DateTime::createFromFormat('d-m-Y', $dob)){
      $dob_err = "Invalid date format";
    }
  } 

  if(empty($_POST["password"])){
    $password = "Password is required";
  } 
  else{
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  }

  $occupation_id = "ggggg";

  if(empty($username_err) && empty($first_name_err) && empty($last_name_err) && empty($email_err) && 
     empty($dob_err) && empty($phone_err) && empty($password_err) && empty($occupation_id_err))
  {
    // echo "All good!";
    $sql = "INSERT INTO user (username, first_name, last_name, email, dob, phone, password)
    VALUES (\"$username\", \"$first_name\", \"$last_name\", \"$email\", \"$dob\", \"$phone\", \"$password\")";

    if($conn->query($sql) === TRUE){
      echo "Signup successful";
    } 
    else{
      echo "Error: " . $sql . "<br>" . $conn->error;
      //echo "Signup failed";
    }
  }

$conn->close();

}
?>


<!-- <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">   -->
 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<div class="card bg-light w-100">

<article class="card-body mx-auto " style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Δημιουργία λογαριασμού</h4>
	
	
	<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user-circle"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="Username" type="text" value="<?php echo $username;?>">
        <span class="error">* <?php echo $username_err;?></span>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="first_name" class="form-control" placeholder="First Name" type="text" value="<?php echo $first_name;?>">
        <span class="error">* <?php echo $first_name_err;?></span>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="last_name" class="form-control" placeholder="Last Name" type="text" value="<?php echo $last_name;?>">
        <span class="error">* <?php echo $last_name_err;?></span>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $email_err;?></span>
    </div> <!-- form-group// -->
   
    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
		 </div>
        <input name="dob" class="form-control" placeholder="Date of Birth" type="date" value="<?php echo $dob;?>">
        <span class="error">* <?php echo $dob_err;?></span>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		
    	<input name="phone" class="form-control" placeholder="Phone number" type="text" value="<?php echo $phone;?>">
        <span class="error">* <?php echo $phone_err;?></span>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password" class="form-control" placeholder="Create password" type="password" value="<?php echo $password;?>">
        <span class="error">* <?php echo $password_err;?></span>
    </div> <!-- form-group// -->
                                        
    <div class="form-group ">
        <button type="submit" class="btn btn-primary btn-block"> Υποβολή  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Έχετε ήδη λογαριασμό; <a href="">Σύνδεση</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->


<?php
//echo "<h2>Your Input:</h2>";
echo $username;
echo "<br>";
echo $first_name;
echo "<br>";
echo $last_name;
echo "<br>";
echo $password;
echo "<br>";
echo $email;
echo "<br>";
echo $dob;
echo "<br>";
echo $phone;
echo "<br>";
echo $occupation_id;
?>

</body>
</html>
