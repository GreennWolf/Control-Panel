<?php
include_once('./src/accounts.php');
include_once('./src/sessionkey.php');


//Variables
$maxRings = 0;
$maxTournament = 0;

//Login Permission
if($_SESSION['user'] !=''){
  $PlayerP = $_SESSION["user"];
  $Permission= 'LoginCP';
  $Action = 'Query';
  $params = "Password=$pw&Command=AccountsPermission" .
  "&Player=" .   urlencode($PlayerP) .
  "&Permission=" . urlencode($Permission) .
  "&Action=" .   urlencode($Action);
  $api = Poker_API($url,$params,true);
  $result = $api["Result"];
  $LoginCP = $api["Query"];
  if($LoginCP == 'Yes'){
  }else{
    echo'<script type="text/javascript">alert("Yoy Account dont have permmission");window.location.href="./src/prueba.php";';
  }
  if ($result == "Error") die("Error: " . $api["Error"]);
}else{
  echo'inicia sesion';
}

//Rings Permissions
if($_SESSION['user'] !='Admin'){
if($_SESSION['user'] !=''){
  $PlayerP = $_SESSION["user"];
  $Permission2= 'Ring1';
  $Action = 'Query';
  $params = "Password=$pw&Command=AccountsPermission" .
  "&Player=" .   urlencode($PlayerP) .
  "&Permission=" . urlencode($Permission2) .
  "&Action=" .   urlencode($Action);
  $api = Poker_API($url,$params,true);
  $result = $api["Result"];
  $Ring1 = $api["Query"];
  if($Ring1 == 'Yes'){
    $maxRings = 1;
  }
  if ($result == "Error") die("Error: " . $api["Error"]);
}else{
  echo'inicia sesion';
}

//2 Rings
if($_SESSION['user'] !=''){
  $PlayerP = $_SESSION["user"];
  $Permission3= 'Ring2';
  $Action = 'Query';
  $params = "Password=$pw&Command=AccountsPermission" .
  "&Player=" .   urlencode($PlayerP) .
  "&Permission=" . urlencode($Permission3) .
  "&Action=" .   urlencode($Action);
  $api = Poker_API($url,$params,true);
  $result = $api["Result"];
  $Ring2 = $api["Query"];
  if($Ring2 == 'Yes'){
    $maxRings = 2;
  }
  if ($result == "Error") die("Error: " . $api["Error"]);
}else{
  echo'inicia sesion';
}

//3Rings
if($_SESSION['user'] !=''){
  $PlayerP = $_SESSION["user"];
  $Permission4= 'Ring3';
  $Action = 'Query';
  $params = "Password=$pw&Command=AccountsPermission" .
  "&Player=" .   urlencode($PlayerP) .
  "&Permission=" . urlencode($Permission4) .
  "&Action=" .   urlencode($Action);
  $api = Poker_API($url,$params,true);
  $result = $api["Result"];
  $Ring3 = $api["Query"];
  if($Ring3 == 'Yes'){
    $maxRings = 3;
  }
  if ($result == "Error") die("Error: " . $api["Error"]);
}else{
  echo'inicia sesion';
}
}

//Tournament Permission


if($_SESSION['user'] !='Admin'){
if($_SESSION['user'] !=''){
  $PlayerP = $_SESSION["user"];
  $Permission5= 'Tournament1';
  $Action = 'Query';
  $params = "Password=$pw&Command=AccountsPermission" .
  "&Player=" .   urlencode($PlayerP) .
  "&Permission=" . urlencode($Permission5) .
  "&Action=" .   urlencode($Action);
  $api = Poker_API($url,$params,true);
  $result = $api["Result"];
  $Tournament1 = $api["Query"];
  if($Tournament1 == 'Yes'){
    $maxTournament = 1;
  }
  if ($result == "Error") die("Error: " . $api["Error"]);
}else{
  echo'inicia sesion';
}

if($_SESSION['user'] !=''){
  $PlayerP = $_SESSION["user"];
  $Permission6= 'Tournament2';
  $Action = 'Query';
  $params = "Password=$pw&Command=AccountsPermission" .
  "&Player=" .   urlencode($PlayerP) .
  "&Permission=" . urlencode($Permission6) .
  "&Action=" .   urlencode($Action);
  $api = Poker_API($url,$params,true);
  $result = $api["Result"];
  $Tournament2 = $api["Query"];
  if($Tournament2 == 'Yes'){
    $maxTournament = 2;
  }
  if ($result == "Error") die("Error: " . $api["Error"]);
}else{
  echo'inicia sesion';
}

if($_SESSION['user'] !=''){
  $PlayerP = $_SESSION["user"];
  $Permission7= 'Tournament3';
  $Action = 'Query';
  $params = "Password=$pw&Command=AccountsPermission" .
  "&Player=" .   urlencode($PlayerP) .
  "&Permission=" . urlencode($Permission4) .
  "&Action=" .   urlencode($Action);
  $api = Poker_API($url,$params,true);
  $result = $api["Result"];
  $Tournament3 = $api["Query"];
  if($Tournament3 == 'Yes'){
    $maxTournament = 3;
  }
  if ($result == "Error") die("Error: " . $api["Error"]);
}else{
  echo'inicia sesion';
}
}
?>