<?php

//
// PHP script by: Giorgos Koursiounis (sdi1600077)
//

session_start();

//if already logged in then redirect
if(isset($_SESSION['loggedin'])){
  header("Location: ../index.php");
  exit;
}

$username = "";
$username_err = $password_err = "";

$servername = "localhost";
$server_username = "user";
$server_password = "password";
$dbname = "oasa";

if(!empty($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
 
  //create connection
  $conn = new mysqli($servername, $server_username, $server_password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  //check if username is given
  if(empty($_POST["username"])){
    $username_err = "Εισάγετε όνομα χρήστη";
  } 
  else{
    $username = $_POST["username"];
  }

  //check if given username exists
  $sql = "SELECT * FROM user WHERE user.username = \"$username\"";
  $result = $conn->query($sql);

  if(!empty($result) && $result->num_rows > 0){

    //check if password is given
    if(empty($_POST["password"])){
      $password_err = "Εισάγετε κωδικό πρόσβασης";
    }
    else{
      while($row = $result->fetch_assoc()){
        //validate password
        if(password_verify($_POST["password"], $row["password"])){

          $_SESSION['loggedin'] = $row["iduser"];
          $_SESSION['username'] = $username;
          $_SESSION['first_name'] = $row["first_name"];
          $_SESSION['last_name'] = $row["last_name"];
          $_SESSION['email'] = $row["email"];
          
          header("Location: ../index.php");
        }
        else{
          $password_err = "Λάθος κωδικός πρόσβασης";
        }
      }
    } 
  }
  else{
    if(empty($username_err)){
      $username_err = "Το όνομα χρήστη δεν βρέθηκε";
    }
  }

$conn->close();

}
?>
