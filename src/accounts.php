<?php
        include_once('./src/sessionkey.php');
        include_once('./src/permission.php');

        $params = "Password=" . $pw . "&Command=SystemGet&Property=SiteName";
        $api = Poker_API($url,$params,true);
        $result = $api["Result"];
        if ($result == "Error") die("Error: " . $api["Error"]);
        $sitename = $api["Value"];

        // Fetch the list of players using the AccountsList API command.
        
        $params = "Password=" . $pw . "&Command=AccountsList&Fields=Player,Creator,Balance,RealName,Location,Email,LastLogin,Gender,PWHash,Avatar";
        $api = Poker_API($url,$params,true);
        $result = $api["Result"];
        if ($result == "Error") die("Error: " . $api["Error"]);

        // Iterate through the players in the response and create a associative
        // chips array keyed on player name.
        $accounts = $api["Accounts"];

        $avatarurl = "http://181.92.212.183/Image?Name=Avatars";   // set your url here
        $avatarmax = 64;       // number of avatars available
        $avatarsize = 64;      // use 32 in version 5, 48 in version 4
    
        
        if (isset($_REQUEST["Submit-Adda"]))
        {
          $Player = $_REQUEST["Player"];
          $RealName = $_REQUEST["RealName"];
          $Creator = $_REQUEST["Creator"];
          $Gender = $_REQUEST["Gender"];
          $Location = $_REQUEST["Location"];
          $Password1 = $_REQUEST["Password1"];
          $Password2 = $_REQUEST["Password2"];
          $Email = $_REQUEST["Email"];
          $Balance = $_REQUEST["Balance"];
          $Avatar = $_REQUEST["Avatar"];
          if ($Password1 <> $Password2) die("Password mismatch. Click Back Button to correct.");
          $params = "Password=$pw&Command=AccountsAdd" .
                    "&Player=" .   urlencode($Player) .
                    "&RealName=" . urlencode($RealName) .
                    "&Creator=" .   urlencode($Creator) .
                    "&PW=" .       urlencode($Password1) .
                    "&Location=" . urlencode($Location) .
                    "&Email=" .    urlencode($Email) .
                    "&Balance=" .    urlencode($Balance) .
                    "&Avatar=" .   urlencode($Avatar) .
                    "&Gender=" .   urlencode($Gender) .
                    "&Chat=" .     "Yes" .
                    "&Note=" .     urlencode("Account created via API");
                    $api = Poker_API($url,$params,true);
                    if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.location.href="./index.php";</script>';
                    else echo'<script type="text/javascript">alert("Error");window.location.href="./index.php";</script>';
                    exit;
        }

        if (isset($_REQUEST["Submit-Clonea"]))
        {
          $Player = $_REQUEST["Player"];
          $RealName = $_REQUEST["RealName"];
          $Gender = $_REQUEST["Gender"];
          $Location = $_REQUEST["Location"];
          $Password1 = $_REQUEST["Password1"];
          $Email = $_REQUEST["Email"];
          $Balance = $_REQUEST["Balance"];
          $Avatar = $_REQUEST["Avatar"];
          $params = "Password=$pw&Command=AccountsAdd" .
                    "&Player=" .   urlencode($Player) .
                    "&RealName=" . urlencode($RealName) .
                    "&PW=" .       urlencode($Password1) .
                    "&Location=" . urlencode($Location) .
                    "&Email=" .    urlencode($Email) .
                    "&Balance=" .   urlencode($Balance) .
                    "&Avatar=" .   urlencode($Avatar) .
                    "&Gender=" .   urlencode($Gender) .
                    "&Chat=" .     "Yes" .
                    "&Note=" .     urlencode("Account Cloned via API");
                    $api = Poker_API($url,$params,true);
                    if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.location.href="./index.php";</script>';
                    else echo'<script type="text/javascript">alert("Error");window.location.href="./index.php";</script>';
                    exit;
        }

        if (isset($_REQUEST["Submit-Edita"]))
        {
          $Player = $_REQUEST["Player"];
          $RealName = $_REQUEST["RealName"];
          $Gender = $_REQUEST["Gender"];
          $Location = $_REQUEST["Location"];
          $Email = $_REQUEST["Email"];
          $Balance = $_REQUEST["Balance"];
          $Avatar = $_REQUEST["Avatar"];
          $params = "Password=$pw&Command=AccountsEdit" .
                    "&Player=" .   urlencode($Player) .
                    "&RealName=" . urlencode($RealName) .
                    "&Location=" . urlencode($Location) .
                    "&Email=" .    urlencode($Email) .
                    "&Balance=" .    urlencode($Balance) .
                    "&Avatar=" .   urlencode($Avatar) .
                    "&Gender=" .   urlencode($Gender);
          $api = Poker_API($url,$params,true);
          if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.location.href="./index.php";</script>';
          else echo'<script type="text/javascript">alert("Error");window.location.href="./index.php";</script>';
          exit;
        }

        if (isset($_REQUEST["Submit-Deletea"]))
        {
          $Player = $_REQUEST["Player"];
          $params = "Password=$pw&Command=AccountsDelete" .
                    "&Player=" .   urlencode($Player);
          $api = Poker_API($url,$params,true);
          if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.location.href="./index.php";</script>';
          else echo "Error: " . $api["Error"] . "<br>Click Back Button to correct.";
          exit;
        }


    ?>