<!--

PHP script by: Giorgos Koursiounis (sdi1600077)

-->

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

if(isset($_SESSION['loggedin'])){
  echo $_SESSION['first_name'] . " " . $_SESSION['last_name'];
}

$idticket = $quantity = "";
$idticket_err = $quantity_err = "";

$servername = "localhost";
$server_username = "user";
$server_password = "password";
$dbname = "oasa";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $conn = new mysqli($servername, $server_username, $server_password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }

  if(empty($_POST["idticket"])){
    $idticket_err = "Select ticket category";
  } 
  else{
    $idticket = $_POST["idticket"];
  }

  $sql = "SELECT uc.iduser_category, uc.name FROM ticket_category tc, user_category uc WHERE tc.idticket_category = \"$idticket\" AND tc.iduser_category = uc.iduser_category";
  $result = $conn->query($sql);

  if(!empty($result) && $result->num_rows > 0){

    while($row = $result->fetch_assoc()){
      echo $row["name"];
      if(($row["name"] == "ΜΕΙΩΜΕΝΟ ΕΙΣΙΤΗΡΙΟ" || $row["name"] == "ΔΩΡΕΑΝ ΕΙΣΙΤΗΡΙΟ") && isset($_SESSION['loggedin'])){

        $sql1 = "SELECT * FROM user WHERE iduser = \"" . $_SESSION['loggedin'] . "\"";
        $result1 = $conn->query($sql1);

        if(!empty($result1) && $result1->num_rows > 0){
          while($row1 = $result1->fetch_assoc()){
            if($row1["iduser_category"] == $row["iduser_category"]){

              if(empty($_POST["quantity"])){
                $quantity_err = "Select quantity";
              }
              else{

                if(isset($_SESSION['buy_cart'])){

                  $temp = $_SESSION['buy_cart'];
                  
                  if(isset($temp["$idticket"])){
                    $temp["$idticket"] += $quantity;
                  }
                  else{
                    $temp["$idticket"] = $quantity;
                  }

                  $_SESSION['buy_cart'] = $temp;
                }
                else{
                  $_SESSION['buy_cart'] = array("$idticket" => "$quantity");
                }

                echo "added to cart - meiomeno dorean";
              }
            }
            else{
              if(empty($idticket_err)){
                $idticket_err = "Δεν δικαιούστε αυτόν τον τύπο εισιτηρίου";
              }
            }
          }
        }
      }
      else if($row["name"] == "KANONIKO ΕΙΣΙΤΗΡΙΟ"){
        echo "kanoniko";

        if(empty($_POST["quantity"])){
          $quantity_err = "Select quantity";
        }
        else{
          $quantity = $_POST["quantity"];
        
          if(isset($_SESSION['buy_cart'])){

            $temp = $_SESSION['buy_cart'];
            
            if(isset($temp["$idticket"])){
              $temp["$idticket"] += $quantity;
            }
            else{
              $temp["$idticket"] = $quantity;
            }

            $_SESSION['buy_cart'] = $temp;
          }
          else{
            $_SESSION['buy_cart'] = array("$idticket" => "$quantity");
          }

          echo "\nadded to cart - kanoniko";
        }
      }
      else{
        $idticket_err = "You need to login first";
      }
    }
  }
  else{
    if(empty($idticket_err)){
      $idticket_err = "Ticket category does not exist";
    }
  }

  $conn->close();
}
?>

<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">

  idticket: <input type="text" name="idticket" value="<?php echo $idticket;?>">
  <span class="error">* <?php echo $idticket_err;?></span>
  <br><br>

  quantity: <input type="text" name="quantity" value="<?php echo $quantity;?>">
  <span class="error">* <?php echo $quantity_err;?></span>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
</form>


</body>
</html>
