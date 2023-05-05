<?php 
  $session = false;
  session_start();
 

  if (isset($_POST["Login"]))
  {
    
      $player = $_POST["Player"];
      $password = $_POST["Password"];
      $params = "Password=$pw&Command=AccountsPassword" . "&Player=" . urlencode($player) . "&PW=" . urlencode($password);
      $api = Poker_API($url,$params,true);
      if ($api["Result"] != "Ok") die(header("Location:./index.php?Error=1"));
      if ($api["Verified"] != "Yes") exit(header("Location:./index.php?Error=2"));
      $params = "Password=$pw&Command=AccountsSessionKey&Player=" . urlencode($player);
      $api = Poker_API($url,$params,true);
      if ($api["Result"] != "Ok") die(header("Location:./index.php?Error=1"));
      $key = $api["SessionKey"];
      $session = true;
      $_SESSION["user"] = $player;
      include_once ("./src/accounts.php");


    if($LoginCP == 'No'){
      $session = false;
      unset($_SESSION["user"]);
      $_SESSION["user"] = '';
      header("Location:./index.php?Error=3");
    }
  }



  
?>
