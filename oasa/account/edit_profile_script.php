<?php

//
// PHP script by: Giorgos Koursiounis (sdi1600077)
//
 
//if already logged in then redirect
if(isset($_SESSION['loggedin'])){
  echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];
}

$message = "";
$username_err = $first_name_err = $last_name_err = $password_err = "";
$email_err = $dob_err = $phone_err = $user_category_err = "";

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

  //check if username is given
  if(empty($_POST["username"])){
    $username_err = "Εισάγετε όνομα χρήστη";
  } 
  else{
    $username = $_POST["username"];
  }

  //check if given username exists
  $sql = "SELECT * FROM user WHERE username = \"$username\"";
  $result = $conn->query($sql);

  if(!empty($result) && $result->num_rows > 0){
    $username_err = "Το όνομα χρήστη υπάρχει ήδη";
  }

  //check if first name is given
  if(empty($_POST["first_name"])){
    $first_name_err = "Εισάγετε όνομα";
  } 
  else{
    $first_name = $_POST["first_name"];
  }

  //check if last name is given
  if(empty($_POST["last_name"])){
    $last_name_err = "Εισάγετε επώνυμο";
  } 
  else{
    $last_name = $_POST["last_name"];
  }

  //check if email is given
  if(empty($_POST["email"])){
    $email_err = "Εισάγετε email ";
  } 
  else{
    $email = $_POST["email"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Ελέγξτε το email σας";
    }
  }

  //check if phone is given
  if(empty($_POST["phone"])){
    $phone_err = "Εισάγετε αριθμό τηλεφώνου";
  } 
  else{
    $phone = preg_replace('/[^0-9]/', '', $_POST["phone"]);
    if(strlen($phone) !== 10){
      $phone_err = "Ο αριθμός τηλεφώνου πρέπει να έχει 10 ψηφία";
    }
  }

  //check if date of birth is given
  if(empty($_POST["dob"])){
    $dob_err = "Εισάγετε ημερομηνία γέννησης";
  } 
  else{
    $dob = $_POST["dob"];
    if(DateTime::createFromFormat('d-m-Y', $dob)){
      $dob_err = "Λανθασμένη ημερομηνία γέννησης";
    }
  } 

  //check if password is given
  if(empty($_POST["password"])){
    $password = "Εισάγετε κωδικό πρόσβασης";
  } 
  else{
    //CAUTION: passwords are hased and then stored in the database
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  }

  //check if user category (student etc.) is given
  if(empty($_POST["user_category"])){
    $user_category_err = "Επιλέξτε κατηγορία χρήστη";
  } 
  else{

    $user_category = $_POST["user_category"];

    $sql = "SELECT * FROM user_category WHERE iduser_category = \"$user_category\"";
    $result = $conn->query($sql);

    if(empty($result) || $result->num_rows <=0){
      $user_category_err = "Η κατηγορία χρήστη δεν υπάρχει";
    }
  }

  //check if there is an error..
  if(empty($username_err) && empty($first_name_err) && empty($last_name_err) && empty($email_err) && 
     empty($dob_err) && empty($phone_err) && empty($password_err) && empty($user_category_err))
  {
    //..if not then update the user's details in the database
    $sql = "UPDATE user SET username = \"$username\", first_name = \"$first_name\", last_name = \"$last_name\", email = \"$email\", dob = \"$dob\", phone = \"$phone\", password = \"$password\", iduser_category = \"$user_category\" WHERE iduser = " . $_SESSION['loggedin'];

    if($conn->query($sql) === TRUE){
    
      $_SESSION['username'] = $username;
      $_SESSION['first_name'] = $first_name;
      $_SESSION['last_name'] = $last_name;
      $_SESSION['email'] = $email;
  
      $message = "Η εγγραφή ολοκληρώθηκε με επιτυχία!";
    } 
    else{
      //echo "Error: " . $sql . "<br>" . $conn->error;
      $message = "Η αλλαγή των στοιχείων χρήστη απέτυχε";
    }
  }

  $conn->close();

}
?>
