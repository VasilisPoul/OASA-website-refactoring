<?php

//
// PHP script by: Giorgos Koursiounis (sdi1600077)
//

session_start();
session_destroy();
header("Location: index.php");
exit;

?>
