<?php 

include_once ("./src/sessionkey.php");
$session = false;
 unset($_SESSION["user"]);
 $_SESSION["user"] = '';
 header("Location:../index.php");

?>