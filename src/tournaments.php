<?php
        $params = "Password=" . $pw . "&Command=TournamentsList&Fields=Name,Status,Creator,PW,Game,Description,Private,,MixedList,Tables,Private,Auto";
        $api = Poker_API($url,$params,true);
        $result = $api["Result"];


        // Iterate through the Names in the response and create a associative
        // chips array keyed on Name name.
        
        $tournaments = $api["Tournaments"];
    
        if (isset($_REQUEST["Submit-Addt"]))
        {
          $Name = $_REQUEST["Name"];
          $Creator = $_REQUEST["Creator"];
          $Game = $_REQUEST["Game"];
          $MixedList = $_REQUEST["MixedList"];
          $Description = $_REQUEST["Description"];
          $Auto = $_REQUEST["Auto"];
          $Private = $_REQUEST["Private"];
          $PW = $_REQUEST["PW"];
          $params = "Password=$pw&Command=TournamentsAdd" .
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

        if (isset($_REQUEST["Submit-Clonet"]))
        {
          $Name = $_REQUEST["Name"];
          $Game = $_REQUEST["Game"];
          $MixedList = $_REQUEST["MixedList"];
          $Description = $_REQUEST["Description"];
          $Auto = $_REQUEST["Auto"];
          $Private = $_REQUEST["Private"];
          $PW = $_REQUEST["PW"];
          $Tables = $_REQUEST["Tables"];
          $params = "Password=$pw&Command=TournamentsClone" .
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

        if (isset($_REQUEST["Submit-Editt"]))
        {
          $Name = $_REQUEST["Name"];
          $Game = $_REQUEST["Game"];
          $MixedList = $_REQUEST["MixedList"];
          $Description = $_REQUEST["Description"];
          $Private = $_REQUEST["Private"];
          $PW = $_REQUEST["PW"];
          $Tables = $_REQUEST["Tables"];
          $params = "Password=$pw&Command=TournamentsEdit" .
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

        if (isset($_REQUEST["Submit-Deletet"]))
        {
          $Name = $_REQUEST["Name"];
          $params = "Password=$pw&Command=TournamentsDelete" .
                    "&Name=" .   urlencode($Name);
          $api = Poker_API($url,$params,true);
          if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.location.href="./index.php";</script>';
          else echo "Error: " . $api["Error"] . "<br>Click Back Button to correct.";
          exit;
        }

        if (isset($_REQUEST["Online-actiont"]))
        {
          $Name = $_REQUEST["Name"];
          $params = "Password=$pw&Command=TournamentsOnline" .
                    "&Name=" .   urlencode($Name);
          $api = Poker_API($url,$params,true);
          if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.Description.href="./index.php";</script>';
          else echo'<script type="text/javascript">alert("Error");window.Description.href="./index.php";</script>';
          exit;
        }

        if (isset($_REQUEST["Offline-actiont"]))
        {
          $Name = $_REQUEST["Name"];
          $params = "Password=$pw&Command=TournamentsOffline&Now=Yes" .
                    "&Name=" .   urlencode($Name);
          $api = Poker_API($url,$params,true);
          if ($api["Result"] == "Ok")echo'<script type="text/javascript">alert("Succesfully");window.Description.href="./index.php";</script>';
          else echo "Error: " . $api["Error"] . "<br>Click Back Button to correct.";
          exit;
        }

    ?>