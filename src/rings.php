<?php
        $params = "Password=" . $pw . "&Command=RingGamesList&Fields=Name,Creator,Status,PW,Game,Description,Private,,MixedList,Tables,Private,Auto";
        $api = Poker_API($url,$params,true);
        $result = $api["Result"];


        // Iterate through the Names in the response and create a associative
        // chips array keyed on Name name.
        
        $ringGames = $api["RingGames"];
    
        if (isset($_REQUEST["Submit-Addr"]))
        {
          $Name = $_REQUEST["Name"];
          $Creator = $_REQUEST["Creator"];
          $Game = $_REQUEST["Game"];
          $MixedList = $_REQUEST["MixedList"];
          $Description = $_REQUEST["Description"];
          $Auto = $_REQUEST["Auto"];
          $Private = $_REQUEST["Private"];
          $PW = $_REQUEST["PW"];
          $params = "Password=$pw&Command=RingGamesAdd" .
                    "&Name=" .   urlencode($Name) .
                    "&Creator=" .   urlencode($Creator) .
                    "&Game=" . urlencode($Game) .
                    "&PW=" .       urlencode($Auto) .
                    "&Description=" . urlencode($Description) .
                    "&Private=" .    urlencode($Private) .
                    "&PW=" .    urlencode($PW) .
                    "&MixedList=" .   urlencode($MixedList) .
                    "&Chat=" .     "Yes" .
                    "&Note=" .     urlencode("Tournament created via API");
                    $api = Poker_API($url,$params,true);
                    if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.location.href="./index.php";</script>';
                    else echo'<script type="text/javascript">alert("Error");window.Description.href="./index.php";</script>';
                    exit;
        }

        if (isset($_REQUEST["Submit-Cloner"]))
        {
          $Name = $_REQUEST["Name"];
          $Game = $_REQUEST["Game"];
          $MixedList = $_REQUEST["MixedList"];
          $Description = $_REQUEST["Description"];
          $Auto = $_REQUEST["Auto"];
          $Private = $_REQUEST["Private"];
          $PW = $_REQUEST["PW"];
          $Tables = $_REQUEST["Tables"];
          $params = "Password=$pw&Command=RingGamesAdd" .
                    "&Name=" .   urlencode($Name) .
                    "&Game=" . urlencode($Game) .
                    "&PW=" .       urlencode($Auto) .
                    "&Description=" . urlencode($Description) .
                    "&Private=" .    urlencode($Private) .
                    "&PW=" .   urlencode($PW) .
                    "&Tables=" .   urlencode($Tables) .
                    "&MixedList=" .   urlencode($MixedList) .
                    "&Chat=" .     "Yes" .
                    "&Note=" .     urlencode("Account Cloned via API");
                    $api = Poker_API($url,$params,true);
                    if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.location.href="./index.php";</script>';
                    else echo'<script type="text/javascript">alert("Error");window.Description.href="./index.php";</script>';
                    exit;
        }

        if (isset($_REQUEST["Submit-Editr"]))
        {
          $Name = $_REQUEST["Name"];
          $Game = $_REQUEST["Game"];
          $MixedList = $_REQUEST["MixedList"];
          $Description = $_REQUEST["Description"];
          $Private = $_REQUEST["Private"];
          $PW = $_REQUEST["PW"];
          $Tables = $_REQUEST["Tables"];
          $params = "Password=$pw&Command=RingGamesEdit" .
                    "&Name=" .   urlencode($Name) .
                    "&Game=" . urlencode($Game) .
                    "&Description=" . urlencode($Description) .
                    "&Private=" .    urlencode($Private) .
                    "&PW=" .    urlencode($PW) .
                    "&Tables=" .   urlencode($Tables) .
                    "&MixedList=" .   urlencode($MixedList);
                    $api = Poker_API($url,$params,true);
                    if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.location.href="./index.php";</script>';
                    else echo'<script type="text/javascript">alert("Error");window.Description.href="./index.php";</script>';
                    exit;
        }

        if (isset($_REQUEST["Submit-Deleter"]))
        {
          $Name = $_REQUEST["Name"];
          $params = "Password=$pw&Command=RingGamesDelete" .
                    "&Name=" . urlencode($Name);
          $api = Poker_API($url,$params,true);
          if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.location.href="./index.php";</script>';
          else echo "Error: " . $api["Error"] . "<br>Click Back Button to correct.";
          exit;
        }

        if (isset($_REQUEST["Online-Actionr"]))
        {
          $Name = $_REQUEST["Name"];
          $params = "Password=$pw&Command=RingGamesOnline" .
                    "&Name=" .   urlencode($Name);
          $api = Poker_API($url,$params,true);
          if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.Description.href="./index.php";</script>';
          else echo'<script type="text/javascript">alert("Error");window.Description.href="./index.php";</script>';
          exit;
        }

        if (isset($_REQUEST["Offline-Actionr"]))
        {
          $Name = $_REQUEST["Name"];
          $params = "Password=$pw&Command=RingGamesOffline&Now=Yes" .
                    "&Name=" .   urlencode($Name);
          $api = Poker_API($url,$params,true);
          if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.Description.href="./index.php";</script>';
          else echo "Error: " . $api["Error"] . "<br>Click Back Button to correct.";
          exit;
        }

    ?>