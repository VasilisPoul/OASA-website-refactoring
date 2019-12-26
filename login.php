
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

$username = "";

$username_err = $password_err = "";

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
  $sql = "SELECT * FROM user WHERE user.username = \"$username\"";
  $result = $conn->query($sql);

  if($result->num_rows > 0){

    if(empty($_POST["password"])){
      $password_err = "Password is required";
    }
    else{
      while($row = $result->fetch_assoc()){
        if(password_verify($_POST["password"], $row["password"])){

          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          $_SESSION['first_name'] = $row["first_name"];
          $_SESSION['last_name'] = $row["last_name"];
          echo "welcome!";
        }
        else{
          $password_err = "wrong password";
        }
      }
    } 
  }
  else{
    if(empty($username_err)){
      $username_err = "Username does not exist";
    }
  }

$conn->close();

}
?>

 
<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">

  username: <input type="text" name="username" value="<?php echo $username;?>">
  <span class="error">* <?php echo $username_err;?></span>
  <br><br>

  password: <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $password_err;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>


</body>
</html>
