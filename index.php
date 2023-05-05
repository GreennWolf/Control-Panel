<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="icon" href="./img/icon.svg">
</head>
<body>
      <main>
        <?php
            include_once ("./src/api.php"); 
            include_once('./src/sessionkey.php');
        ?>
      <dialog open class="disabled" id="disabled">
        <dialog open id="loginmodal">
            <form class="form" method="post">
                <h3>POKER LOGIN</h3>
                <table>
                <tr>
                    <td hidden><input type="text" id="Session" value="<?php echo $_SESSION["user"];?>" name="Session"></td>
                    <td>Username:</td>
                    <td><input type="text" name="Player" autofocus></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="Password"></td>
                </tr>
                <?php
                    if(isset($_GET['Error']) && $_GET['Error'] == 1){ 
                        echo '<td class="Error">Username or Password incorrect</td>';
                    }
                    if(isset($_GET['Error']) && $_GET['Error'] == 2){ 
                        echo "<td class='Error2'>Incorrect Password</td>";
                    }
                    if(isset($_GET['Error']) && $_GET['Error'] == 3){ 
                        echo "<td class='Error3'>You dont have PERMISSION</td>";
                    }
                    ?>
                <tr>
                    <th colspan="2"><input type="submit" id="LoginB" name="Login" value="LOGIN"></th>
                </tr>
                </table>
            </form>
            </dialog>
        </dialog>

        <div class="head">
            <header>
                <li class="li active">WELCOME</li>
                <li class="li">ACCOUNT</li>
                <li class="li">ROOMS</li>
                <li class="li">TOURNAMENTS</li>
                <li class="li">FAQ</li>
                <li class="li username"><?php 
                    if($session == true){
                        echo $_SESSION["user"]; 
                    }
                    else{
                        echo"Perfil"; 
                    }
                ?></li>
            </header>
        </div>

        <div class="chest">
            <div class="tabs active">
                <div class="welcome">
                </div>
            </div>
            
            <div class="tabs">
                <?php require_once("./src/accounts.php"); ?>
                <div class="accounts">
                    <div class="content">
                        <div class="title">
                            <h2>ACCOUNTS</h2>
                        </div>
                        <div class="submenu">
                            <li class="options" id="adda">ADD</li>
                                <dialog class="modal" id="adda-modal">
                                    <button class="close" id="adda-close">&times;</button>
                                    <h3>Create New Account</h3>
                                    <form class="add-form" method="post">
                                        <table>
                                        <tr><td>Player name:</td><td><input type="text" name="Player" autofocus /></td></tr>
                                        <tr hidden><td>Creator name:</td><td><input type="text" value="<?php echo $_SESSION["user"]; ?>" name="Creator" /></td></tr>
                                        <tr><td>Player real name:</td><td><input type="text" name="RealName" /></td></tr>
                                        <tr><td>Player gender:</td><td><select name="Gender" id="GenderA">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>       
                                        </select></td></tr>
                                        <tr><td>player location:</td><td><input type="text" name="Location" /></td></tr>
                                        <tr><td>Player password:</td><td><input type="password" name="Password1" /></td></tr>
                                        <tr><td>Repeat player password:</td><td><input type="password" name="Password2" /></td></tr>
                                        <tr><td>Player email address:</td><td><input type="text" name="Email" /></td></tr>
                                        <tr><td>Player balance:</td><td><input type="text" name="Balance" /></td></tr>
                                        <tr><td>Avatar:</td><td>
                                        <div class='avatar' style="width: 100px; height: 175px; overflow: auto; border: solid 2px">
                                        <?php
                                            for ($i = 0; $i < $avatarmax; $i++)
                                            {
                                            $a = "border:none; display: inline-block; width: " . $avatarsize . "px; height: " . $avatarsize . "px; background: " . 
                                                "url('" . $avatarurl . "') no-repeat -" . ($i * $avatarsize) . "px 0px;"; 
                                            $s = "<input type='radio' name='Avatar' value='" . ($i + 1) . "'";
                                            if ($i == 0) $s .= " checked";
                                            $s .= ">"; 
                                            $s .= "<div style=\"" . $a . "\"></div>";
                                            echo $s . "<br><br>\r\n";
                                            }
                                        ?>
                                        </div>
                                        </td></tr>
                                        </table>
                                        <input type="submit" name="Submit-Adda" class="submit" value="Create" />
                                    </form>
                                </dialog>
                            <li class="options" id="clonea">CLONE</li>
                                <dialog class="modal" id="clonea-modal">
                                    <button class="close" id="clonea-close">&times;</button>
                                    <h3>Clone Account</h3>
                                    <form class="add-form" method="post">
                                        <table>
                                            <tr><td>Player name:</td><td><input type="text" id="PlayerC" name="Player" autofocus /></td></tr>
                                            <tr hidden><td>Creator name:</td><td><input type="text" value="<?php echo $_SESSION["user"]; ?>" name="Creator" /></td></tr>
                                            <tr><td>Player real name:</td><td><input type="text" id="RealNameC" name="RealName" /></td></tr>
                                            <tr><td>Player gender:</td><td><select name="Gender" id="GenderC">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>       
                                            </select></td></tr>
                                            <tr><td>player location:</td><td><input type="text" id="LocationC" name="Location" /></td></tr>
                                            <tr><td>Player password:</td><td><input type="password" id="PasswordC" name="Password1" /></td></tr>
                                            <tr><td>Repeat player password:</td><td><input type="password" name="Password2" /></td></tr>
                                            <tr><td>Player email address:</td><td><input type="text" id="EmailC" name="Email" /></td></tr>
                                            <tr><td>Player balance:</td><td><input type="text" id="BalanceC" name="Balance" /></td></tr>
                                            <tr><td>Avatar:</td><td>
                                            <div class='avatar' style="width: 100px; height: 175px; overflow: auto; border: solid 2px">
                                            <?php
                                                for ($i = 0; $i < $avatarmax; $i++)
                                                {
                                                $a = "border:none; display: inline-block; width: " . $avatarsize . "px; height: " . $avatarsize . "px; background: " . 
                                                    "url('" . $avatarurl . "') no-repeat -" . ($i * $avatarsize) . "px 0px;"; 
                                                $s = "<input type='radio' name='Avatar' value='" . ($i + 1) . "'";
                                                if ($i == 0) $s .= " checked";
                                                $s .= ">"; 
                                                $s .= "<div style=\"" . $a . "\"></div>";
                                                echo $s . "<br><br>\r\n";
                                                }
                                            ?>
                                            </div>
                                            </td></tr>
                                        </table>
                                        <input type="submit" name="Submit-Clonea" class="submit" value="Clone" />
                                    </form>
                                </dialog>
                            <li class="options" id="edita">EDIT</li>
                                <dialog class="modal" id="edita-modal">
                                        <button class="close" id="edita-close">&times;</button>
                                        <h3>Edit Account</h3>
                                        <form class="add-form" method="post">
                                            <table>
                                                <tr hidden><td >Player name:</td><td><input type="text" id="PlayerE" name="Player" /></td></tr>
                                                <tr hidden><td>Creator name:</td><td><input type="text" value="<?php echo $_SESSION["user"]; ?>" name="Creator" /></td></tr>
                                                <tr><td>Player real name:</td><td><input type="text" id="RealNameE" name="RealName" autofocus /></td></tr>
                                                <tr><td>Player gender:</td><td><select name="Gender" id="GenderE">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>       
                                                </select></td></tr>
                                                <tr><td>player location:</td><td><input type="text" id="LocationE" name="Location" /></td></tr>
                                                <tr><td>Player password:</td><td><input type="password" name="Password1" /></td></tr>
                                                <tr><td>Repeat player password:</td><td><input type="password" name="Password2" /></td></tr>
                                                <tr><td>Player email address:</td><td><input type="text" id="EmailE" name="Email" /></td></tr>
                                                <tr><td>Player balance:</td><td><input type="text" id="BalanceE" name="Balance" /></td></tr>
                                                <tr><td>Avatar:</td><td>
                                                <div class='avatar' style="width: 100px; height: 175px; overflow: auto; border: solid 2px">
                                                <?php
                                                    for ($i = 0; $i < $avatarmax; $i++)
                                                    {
                                                    $a = "border:none; display: inline-block; width: " . $avatarsize . "px; height: " . $avatarsize . "px; background: " . 
                                                        "url('" . $avatarurl . "') no-repeat -" . ($i * $avatarsize) . "px 0px;"; 
                                                    $s = "<input type='radio' name='Avatar' value='" . ($i + 1) . "'";
                                                    if ($i == 0) $s .= " checked";
                                                    $s .= ">"; 
                                                    $s .= "<div style=\"" . $a . "\"></div>";
                                                    echo $s . "<br><br>\r\n";
                                                    }
                                                ?>
                                                </div>
                                                </td></tr>
                                            </table>
                                            <input type="submit" name="Submit-Edita" class="submit" value="Edit" />
                                        </form>
                                    </dialog>
                            <li class="options" id="deletea">DELETE</li>
                                <dialog class="short-modal" id="deletea-modal">
                                    <div class="short-content">
                                        <form id="deletea-form" method="post">
                                            <input hidden type="text" id="PlayerD" value="" name="Player" >
                                            <h2>Delete account?</h2>
                                            <div class="btns-delete">
                                                <button type="button" class="no" id="deletea-close">CANCEL</button>
                                                <button type="submit" id="yes" name="Submit-Deletea" class="yes">ACEPT</button>
                                            </div>
                                        </form>
                                    </div>
                                </dialog>
                        </div>
                        <!-- TABLE -->
                            <?php
                                $Accounts_Created = 0;
                                echo"<div class='container-table'>";
                                if($_SESSION["user"] != ''){
                                        if($_SESSION["user"] == 'Admin'){
                                            echo"<div class=container-content><span class='text-up'><h2>Email</h2></span><span class='text-up'><h2>Player</h2></span><span class='text-up'><h2>Creator</h2></span><span class='text-up'><h2>Balance</h2></span><span class='text-up'><h2>Online</h2></span><span class='text-up'><h2>RealName</h2></span><span class='text-up'><h2>Location</h2></span><span class='text-up'><h2>Gender</h2></span><span class='text-up'><h2>LastLogin</h2></span></div>";
                                        }else{
                                            echo"<div class=container-content><span class='text-up'><h2>Email</h2></span><span class='text-up'><h2>Player</h2></span><span class='text-up'><h2>Balance</h2></span><span class='text-up'><h2>Online</h2></span><span class='text-up'><h2>RealName</h2></span><span class='text-up'><h2>Location</h2></span><span class='text-up'><h2>Gender</h2></span><span class='text-up'><h2>LastLogin</h2></span></div>";
                                        }
                                    }
                                echo "<div class='container-grid id='Account_Created'>";
                                for ($i = 1; $i <=$accounts; $i++)
                                {
                                    $Creator = $api["Creator" . $i];
                                    

                                    if($_SESSION["user"] == 'Admin'){
                                        $Player = $api["Player" . $i];
                                        $Balance = $api["Balance" . $i];
                                        $Email = $api["Email" . $i];
                                        $PWHash = $api["PWHash" . $i];
                                        $RealName = $api["RealName" . $i];
                                        $Location = $api["Location" . $i];
                                        $Gender = $api["Gender" . $i];
                                        $LastLogin = $api["LastLogin" . $i];
                                        $Avatar = $api["Avatar" . $i];
                                        $id = $i; ; 
                                        echo"<div class='container-gridA' value='$Accounts_Created'><span  value='$Email' class='email'>$Email</span><span class='text' value='$Player'>$Player</span><span value='$Balance' class='text'>$Balance</span><span  value='$Creator' class='text'>$Creator</span><span value='$RealName' class='text'>$RealName</span><span value='$Location' class='text'>$Location</span><span value='$Gender' class='text'>$Gender</span><span  value='$Avatar' class='text'>$LastLogin</span><span  value='$PWHash'></span></div>";
                                        }

                                    if($Creator == $_SESSION["user"]){
                                    $Player = $api["Player" . $i];
                                    $Balance = $api["Balance" . $i];
                                    $Email = $api["Email" . $i];
                                    $PWHash = $api["PWHash" . $i];
                                    $RealName = $api["RealName" . $i];
                                    $Location = $api["Location" . $i];
                                    $Gender = $api["Gender" . $i];
                                    $LastLogin = $api["LastLogin" . $i];
                                    $Avatar = $api["Avatar" . $i];
                                    $Accounts_Created++;
                                    echo"<div class='container-gridA' value='$Accounts_Created'><span  value='$Email' class='email'>$Email</span><span class='text' value='$Player'>$Player</span><span value='$Balance' class='text'>$Balance</span><span  value='' class='text'></span><span value='$RealName' class='text'>$RealName</span><span value='$Location' class='text'>$Location</span><span value='$Gender' class='text'>$Gender</span><span  value='$Avatar' class='text'>$LastLogin</span><span  value='$PWHash'></span></div>";
                                    }
                                }
                                    echo"</div>";
                                echo"</div>";
                            ?>
                    </div>
                </div>
            </div>
            <div class="tabs">
                
                <div class="rooms">
                    <div class="content">
                        <div class="title">
                            <h2>ROOMS</h2>
                        </div>
                        <?php require_once("./src/rings.php"); ?>
                        <div class="submenu">
                            <li class="options" id="addr">ADD</li>
                                <dialog class="modal" id="addr-modal">
                                    <button class="close" id="addr-close">&times;</button>
                                    <h3>Create New Ring</h3>
                                    <form class="add-form" method="post">
                                        <table>
                                        <tr><td>Ring name:</td><td><input type="text" name="Name" /></td></tr>
                                        <tr hidden><td>Creator name:</td><td><input type="text" value="<?php echo $_SESSION["user"]; ?>" name="Creator" /></td></tr>
                                        <tr><td>Game Type</td><td><select name="Game" id="GameAR">
                                            <option value="Limit Hold'em">Limit Hold'em</option>
                                            <option value="Pot Limit Hold'em">Pot Limit Hold'em</option>
                                            <option value="No Limit Hold'em">No Limit Hold'em</option>
                                            <option value="Limit Omaha">Limit Omaha</option>
                                            <option value="Pot Limit Omaha">Pot Limit Omaha</option>
                                            <option value="No Limit Omaha">No Limit Omaha</option>
                                            <option value="Limit Omaha Hi-Lo">Limit Omaha Hi-Lo</option>
                                            <option value="Pot Limit Omaha Hi-Lo">Pot Limit Omaha Hi-Lo</option>
                                            <option value="No Limit Omaha Hi-Lo">No Limit Omaha Hi-Lo</option>
                                            <option value="Limit Razz">Limit Razz</option>
                                            <option value="Limit Stud">Limit Stud</option>
                                            <option value="Limit Stud Hi-Lo">Limit Stud Hi-Lo</option>
                                            <option id="Mixed" value="Mixed">Mixed</option>
                                        </select></td></tr> &nbsp; 
                                        <tr><td>MixedList:</td><td><input type="text" name="MixedList" id="MixedListAR" disabled/></td></tr>
                                        <tr><td>Description:</td><td><input type="text" name="Description" /></td></tr>
                                        <tr><td>Private:</td><td><input type="radio" id="PrivateIARY" name="Private" Value="Yes" >Yes</input> &nbsp; 
                                                                <input type="radio" id="PrivateIARN" checked name="Private" Value="No">No</input></td></tr></td></tr>
                                        <tr><td>Password:</td><td><input type="password" id="passwordIAR" disabled name="PW" /></td></tr>
                                        <tr><td>Auto:</td><td><input type="radio" name="Auto" Value="Yes" checked>Yes</input> &nbsp; 
                                                                <input type="radio" name="Auto" Value="No">No</input></td></tr>
                                        </div>
                                        </td></tr>
                                        </table>
                                        <input type="submit" name="Submit-Addr" id="submit" class="submit" value="Submit" />
                                    </form>
                                </dialog>
                            <li class="options" id="cloner">CLONE</li>
                                <dialog class="modal" id="cloner-modal">
                                    <button class="close" id="cloner-close">&times;</button>
                                    <h3>Clone Room</h3>
                                    <form class="add-form" method="post">
                                        <table>
                                        <tr><td>Ring name:</td><td><input type="text" id="nameCR" name="Name" /></td></tr>
                                        <tr hidden><td>Creator name:</td><td><input type="text" value="<?php echo $_SESSION["user"]; ?>" name="Creator" /></td></tr>
                                        <tr><td>Game Type</td><td><select name="Game" id="GameCR">
                                            <option value="Limit Hold'em">Limit Hold'em</option>
                                            <option value="Pot Limit Hold'em">Pot Limit Hold'em</option>
                                            <option value="No Limit Hold'em">No Limit Hold'em</option>
                                            <option value="Limit Omaha">Limit Omaha</option>
                                            <option value="Pot Limit Omaha">Pot Limit Omaha</option>
                                            <option value="No Limit Omaha">No Limit Omaha</option>
                                            <option value="Limit Omaha Hi-Lo">Limit Omaha Hi-Lo</option>
                                            <option value="Pot Limit Omaha Hi-Lo">Pot Limit Omaha Hi-Lo</option>
                                            <option value="No Limit Omaha Hi-Lo">No Limit Omaha Hi-Lo</option>
                                            <option value="Limit Razz">Limit Razz</option>
                                            <option value="Limit Stud">Limit Stud</option>
                                            <option value="Limit Stud Hi-Lo">Limit Stud Hi-Lo</option>
                                            <option value="Mixed">Mixed</option>
                                        </select></td></tr> &nbsp; 
                                        <tr><td>MixedList:</td><td><input type="text" name="MixedList" id="MixedListCR" disabled/></td></tr>
                                        <tr><td>Description:</td><td><input type="text" id="descriptionCR" name="Description" /></td></tr>
                                        <tr><td>Private:</td><td><input type="radio" id="privateCRY" name="Private" Value="Yes" >Yes</input> &nbsp; 
                                                                <input type="radio" id="privateCRN" checked name="Private" Value="No">No</input></td></tr></td></tr>
                                        <tr><td>Password:</td><td><input type="password" id="passwordCR" name="PW" /></td></tr>
                                        <tr><td>Auto:</td><td><input type="radio" name="Auto" id="autoCRY" Value="Yes" checked>Yes</input> &nbsp; 
                                                                <input type="radio" name="Auto" id="autoCRN" Value="No">No</input></td></tr>
                                        </div>
                                        </td></tr>
                                        </table>
                                        <input type="submit" name="Submit-Cloner" id="submit" class="submit" value="Submit" />
                                    </form>
                                </dialog>
                            <li class="options" id="editr">EDIT</li>
                                <dialog class="modal" id="editr-modal">
                                        <button class="close" id="editr-close">&times;</button>
                                        <h3>Edit Room</h3>
                                        <form class="add-form" method="post">
                                            <table>
                                            <tr hidden><td>Ring name:</td><td><input type="text" id="NameER" name="Name" /></td></tr>
                                            <tr hidden><td>Creator name:</td><td><input type="text" value="<?php echo $_SESSION["user"]; ?>" name="Creator" /></td></tr>
                                            <tr><td>Game Type</td><td><select name="Game" id="GameER">
                                                <option value="Limit Hold'em">Limit Hold'em</option>
                                                <option value="Pot Limit Hold'em">Pot Limit Hold'em</option>
                                                <option value="No Limit Hold'em">No Limit Hold'em</option>
                                                <option value="Limit Omaha">Limit Omaha</option>
                                                <option value="Pot Limit Omaha">Pot Limit Omaha</option>
                                                <option value="No Limit Omaha">No Limit Omaha</option>
                                                <option value="Limit Omaha Hi-Lo">Limit Omaha Hi-Lo</option>
                                                <option value="Pot Limit Omaha Hi-Lo">Pot Limit Omaha Hi-Lo</option>
                                                <option value="No Limit Omaha Hi-Lo">No Limit Omaha Hi-Lo</option>
                                                <option value="Limit Razz">Limit Razz</option>
                                                <option value="Limit Stud">Limit Stud</option>
                                                <option value="Limit Stud Hi-Lo">Limit Stud Hi-Lo</option>
                                                <option value="Mixed">Mixed</option>
                                            </select></td></tr> &nbsp; 
                                            <tr><td>MixedList:</td><td><input type="text" name="MixedList" id="MixedListER" disabled/></td></tr>
                                            <tr><td>Description:</td><td><input type="text" id="descriptionER"  name="Description" /></td></tr>
                                            <tr><td>Private:</td><td><input type="radio" id="privateERY" name="Private" Value="Yes" >Yes</input> &nbsp; 
                                                                    <input type="radio" id="privateERN" checked name="Private" Value="No">No</input></td></tr></td></tr>
                                            <tr><td>Password:</td><td><input type="password" id="passwordER" name="PW" /></td></tr>
                                            <tr><td>Auto:</td><td><input type="radio" name="Auto" id="autoERY" Value="Yes" checked>Yes</input> &nbsp; 
                                                                    <input type="radio" name="Auto" id="autoERN" Value="No">No</input></td></tr>
                                            </div>
                                            </td></tr>
                                            </table>
                                            <input type="submit" name="Submit-Editr" id="submit" class="submit" value="Submit" />
                                        </form>
                                    </dialog>
                            <li class="options" id="deleter">DELETE</li>
                                <dialog class="short-modal" id="deleter-modal">
                                    <div class="short-content">
                                        <form id="deleter-form" method="post">
                                            <input hidden type="text" id="RoomD" name="Name" >
                                            <h2>Delete room?</h2>
                                            <div class="btns-delete">
                                                <button type="button" class="no" id="deleter-close">CANCEL</button>
                                                <button type="submit" id="yes" name="Submit-Deleter" class="yes">ACEPT</button>
                                            </div>
                                        </form>
                                    </div>
                                </dialog>
                            <li class="options" id="actionr">ACTION</li>
                                <dialog class="short-modal" id="actionr-modal">
                                    <div class="short-content">
                                        <form id="actionr-form" method="post">
                                            <input hidden type="text" id="RoomA" value="" name="Name" >
                                            <h2>Actions</h2>
                                            <div class="btns-action">
                                                <button type="submit" name="Online-Actionr" >Turn Online</button>
                                                <button type="submit" name="Offline-Actionr" >Turn Offline</button>
                                                <button type="button" id="actionr-close" name="close" >Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </dialog>
                        </div>
                        <!-- TABLE -->
                            <?php
                                $Rings_Created = 0;
                                echo"<div class='container-table'>";

                                    if($_SESSION["user"] == 'Admin'){
                                        echo"<div class=container-content><span class='text-up'><h2>Name</h2></span><span class='text-up'><h2>Status</h2></span><span class='text-up'><h2>Creator</h2></span><span class='text-up'><h2>Password</h2></span><span class='text-up'><h2>Private</h2></span><span class='text-up'><h2>Game</h2></span><span class='text-up'><h2>Description</h2></span><span class='text-up'><h2>MixedList</h2></span><span class='text-up'><h2>Auto</h2></span></div>";
                                    }else{
                                        echo"<div class=container-content><span class='text-up'><h2>Name</h2></span><span class='text-up'><h2>Status</h2></span><span class='text-up'><h2>Password</h2></span><span class='text-up'><h2>Private</h2></span><span class='text-up'><h2>Game</h2></span><span class='text-up'><h2>Description</h2></span><span class='text-up'><h2>MixedList</h2></span><span class='text-up'><h2>Auto</h2></span></div>";
                                    }
                                    
                                    echo "<div class='container-grid' id='Rings_Created' >";
                                        for ($i = 1; $i <= $ringGames; $i++)
                                            {   
                                                $Creator = $api["Creator" . $i];
                                                if($_SESSION["user"] == 'Admin'){
                                                    
                                                    $Name = $api["Name" . $i];
                                                    $PW = $api["PW" . $i];
                                                    $Private = $api["Private" . $i];
                                                    $Game = $api["Game" . $i];
                                                    $Description = $api["Description" . $i];
                                                    $MixedList = $api["MixedList" . $i];
                                                    $Status = $api["Status" . $i];
                                                    $Auto = $api["Auto" . $i];
                                                    $id = $i; 
                                                    echo"<div class='container-gridR'><span  value='$Name' class='text'>$Name</span><span class='text' value='$Status'>$Status</span><span  value='$Creator' class='text'>$Creator</span><span value='$PW' class='text camp'>$PW</span><span  value='$Private' class='text camp'>$Private</span><span value='$Game' class='text'>$Game</span><span value='$Description' class='text'>$Description</span><span value='$Creator' class='text'>$Creator</span><span  value='$Auto' class='text camp'>$Auto</span></div>";
                                                }

                                                
                                                if($Creator == $_SESSION["user"]){
                                                $Name = $api["Name" . $i];
                                                $PW = $api["PW" . $i];
                                                $Private = $api["Private" . $i];
                                                $Game = $api["Game" . $i];
                                                $Description = $api["Description" . $i];
                                                $MixedList = $api["MixedList" . $i];
                                                $Status = $api["Status" . $i];
                                                $Auto = $api["Auto" . $i];
                                                $Rings_Created++;
                                                echo"<div class='container-gridR' value='$Rings_Created'><span  value='$Name' class='text'>$Name</span><span class='text' value='$Status'>$Status</span><span value='$PW' class='text camp'>$PW</span><span  value='$Private' class='text camp'>$Private</span><span value='$Game' class='text'>$Game</span><span value='$Description' class='text'>$Description</span><span value='$MixedList' class='text'>$MixedList</span><span  value='$Auto' class='text camp'>$Auto</span></div>";
                                            }
                                        }
                                    echo"</div>";
                                echo"</div>";
                        ?>
                        
                    </div>
                </div>
            </div>
            <div class="tabs">
                <div class="tournaments">
                    <div class="content">
                        <div class="title">
                            <h2>TOURNAMENTS</h2>
                        </div>
                        <?php require_once("./src/tournaments.php"); ?>
                        <div class="submenu">
                            <li class="options" id="addt">ADD</li>
                                <dialog class="modal" id="addt-modal">
                                    <button class="close" id="addt-close">&times;</button>
                                    <h3>Create New Tournament</h3>
                                    <form class="add-form" method="post">
                                        <table>
                                        <tr><td>Tournament name:</td><td><input type="text" name="Name" /></td></tr>
                                        <tr hidden><td>Creator name:</td><td><input type="text" value="<?php echo $_SESSION["user"]; ?>" name="Creator" /></td></tr>
                                        <tr><td>Game Type</td><td><select name="Game" id="GameAT">
                                            <option value="Limit Hold'em">Limit Hold'em</option>
                                            <option value="Pot Limit Hold'em">Pot Limit Hold'em</option>
                                            <option value="No Limit Hold'em">No Limit Hold'em</option>
                                            <option value="Limit Omaha">Limit Omaha</option>
                                            <option value="Pot Limit Omaha">Pot Limit Omaha</option>
                                            <option value="No Limit Omaha">No Limit Omaha</option>
                                            <option value="Limit Omaha Hi-Lo">Limit Omaha Hi-Lo</option>
                                            <option value="Pot Limit Omaha Hi-Lo">Pot Limit Omaha Hi-Lo</option>
                                            <option value="No Limit Omaha Hi-Lo">No Limit Omaha Hi-Lo</option>
                                            <option value="Limit Razz">Limit Razz</option>
                                            <option value="Limit Stud">Limit Stud</option>
                                            <option value="Limit Stud Hi-Lo">Limit Stud Hi-Lo</option>
                                            <option id="Mixed" value="Mixed">Mixed</option>
                                        </select></td></tr> &nbsp; 
                                        <tr><td>MixedList:</td><td><input type="text" name="MixedList" id="MixedListAT" disabled/></td></tr>
                                        <tr><td>Description:</td><td><input type="text" name="Description" /></td></tr>
                                        <tr><td>Private:</td><td><input type="radio" id="PrivateIATY" name="Private" Value="Yes" >Yes</input> &nbsp; 
                                                                <input type="radio" id="PrivateIATN" checked name="Private" Value="No">No</input></td></tr></td></tr>
                                        <tr><td>Password:</td><td><input type="password" id="passwordIAT" disabled name="PW" /></td></tr>
                                        <tr><td>Auto:</td><td><input type="radio" name="Auto" Value="Yes" checked>Yes</input> &nbsp; 
                                                                <input type="radio" name="Auto" Value="No">No</input></td></tr>
                                        </div>
                                        </td></tr>
                                        </table>
                                        <input type="submit" name="Submit-Addt" id="submit" class="submit" value="Submit" />
                                    </form>
                                </dialog>
                            <li class="options" id="clonet">CLONE</li>
                                <dialog class="modal" id="clonet-modal">
                                    <button class="close" id="clonet-close">&times;</button>
                                    <h3>Clone Tournament</h3>
                                    <form class="add-form" method="post">
                                        <table>
                                        <tr><td>Tournament name:</td><td><input type="text" id="nameCT" name="Name" /></td></tr>
                                        <tr hidden><td>Creator name:</td><td><input type="text" value="<?php echo $_SESSION["user"]; ?>" name="Creator" /></td></tr>
                                        <tr><td>Game Type</td><td><select name="Game" id="GameCT">
                                            <option value="Limit Hold'em">Limit Hold'em</option>
                                            <option value="Pot Limit Hold'em">Pot Limit Hold'em</option>
                                            <option value="No Limit Hold'em">No Limit Hold'em</option>
                                            <option value="Limit Omaha">Limit Omaha</option>
                                            <option value="Pot Limit Omaha">Pot Limit Omaha</option>
                                            <option value="No Limit Omaha">No Limit Omaha</option>
                                            <option value="Limit Omaha Hi-Lo">Limit Omaha Hi-Lo</option>
                                            <option value="Pot Limit Omaha Hi-Lo">Pot Limit Omaha Hi-Lo</option>
                                            <option value="No Limit Omaha Hi-Lo">No Limit Omaha Hi-Lo</option>
                                            <option value="Limit Razz">Limit Razz</option>
                                            <option value="Limit Stud">Limit Stud</option>
                                            <option value="Limit Stud Hi-Lo">Limit Stud Hi-Lo</option>
                                            <option value="Mixed">Mixed</option>
                                        </select></td></tr> &nbsp; 
                                        <tr><td>MixedList:</td><td><input type="text" name="MixedList" id="MixedListCT" disabled/></td></tr>
                                        <tr><td>Description:</td><td><input type="text" id="descriptionCT" name="Description" /></td></tr>
                                        <tr><td>Private:</td><td><input type="radio" id="privateCTY" name="Private" Value="Yes" >Yes</input> &nbsp; 
                                                                <input type="radio" id="privateCTN" checked name="Private" Value="No">No</input></td></tr></td></tr>
                                        <tr><td>Password:</td><td><input type="password" id="passwordCT" name="PW" /></td></tr>
                                        <tr><td>Auto:</td><td><input type="radio" name="Auto" id="autoCTY" Value="Yes" checked>Yes</input> &nbsp; 
                                                                <input type="radio" name="Auto" id="autoCTN" Value="No">No</input></td></tr>
                                        </div>
                                        </td></tr>
                                        </table>
                                        <input type="submit" name="Submit-Clonet" id="submit" class="submit" value="Submit" />
                                    </form>
                                </dialog>
                            <li class="options" id="editt">EDIT</li>
                                <dialog class="modal" id="editt-modal">
                                        <button class="close" id="editt-close">&times;</button>
                                        <h3>Edit Tournament</h3>
                                        <form class="add-form" method="post">
                                            <table>
                                            <tr hidden><td>Tournament name:</td><td><input type="text" id="NameET" name="Name" /></td></tr>
                                            <tr hidden><td>Creator name:</td><td><input type="text" value="<?php echo $_SESSION["user"]; ?>" name="Creator" /></td></tr>
                                            <tr><td>Game Type</td><td><select name="Game" id="GameET">
                                                <option value="Limit Hold'em">Limit Hold'em</option>
                                                <option value="Pot Limit Hold'em">Pot Limit Hold'em</option>
                                                <option value="No Limit Hold'em">No Limit Hold'em</option>
                                                <option value="Limit Omaha">Limit Omaha</option>
                                                <option value="Pot Limit Omaha">Pot Limit Omaha</option>
                                                <option value="No Limit Omaha">No Limit Omaha</option>
                                                <option value="Limit Omaha Hi-Lo">Limit Omaha Hi-Lo</option>
                                                <option value="Pot Limit Omaha Hi-Lo">Pot Limit Omaha Hi-Lo</option>
                                                <option value="No Limit Omaha Hi-Lo">No Limit Omaha Hi-Lo</option>
                                                <option value="Limit Razz">Limit Razz</option>
                                                <option value="Limit Stud">Limit Stud</option>
                                                <option value="Limit Stud Hi-Lo">Limit Stud Hi-Lo</option>
                                                <option value="Mixed">Mixed</option>
                                            </select></td></tr> &nbsp; 
                                            <tr><td>MixedList:</td><td><input type="text" name="MixedList" id="MixedListET" disabled/></td></tr>
                                            <tr><td>Description:</td><td><input type="text" id="descriptionET"  name="Description" /></td></tr>
                                            <tr><td>Private:</td><td><input type="radio" id="privateETY" name="Private" Value="Yes" >Yes</input> &nbsp; 
                                                                    <input type="radio" id="privateETN" checked name="Private" Value="No">No</input></td></tr></td></tr>
                                            <tr><td>Password:</td><td><input type="password" id="passwordET" name="PW" /></td></tr>
                                            <tr><td>Auto:</td><td><input type="radio" name="Auto" id="autoETY" Value="Yes" checked>Yes</input> &nbsp; 
                                                                    <input type="radio" name="Auto" id="autoETN" Value="No">No</input></td></tr>
                                            </div>
                                            </td></tr>
                                            </table>
                                            <input type="submit" name="Submit-Editt" id="submit" class="submit" value="Submit" />
                                        </form>
                                    </dialog>
                            <li class="options" id="deletet">DELETE</li>
                                <dialog class="short-modal" id="deletet-modal">
                                    <div class="short-content">
                                        <form id="deletet-form" method="post">
                                            <input hidden type="text" id="TournamentD" value="" name="Name" >
                                            <h2>Delete tournament?</h2>
                                            <div class="btns-delete">
                                                <button type="button" class="no" id="deletet-close">CANCEL</button>
                                                <button type="submit" id="yes" name="Submit-Deletet" class="yes">ACEPT</button>
                                            </div>
                                        </form>
                                    </div>
                                </dialog>
                            <li class="options" id="actiont">ACTION</li>
                                <dialog class="short-modal" id="actiont-modal">
                                    <div class="short-content">
                                        <form id="actiont-form" method="post">
                                            <input hidden type="text" id="tournamentA" value="" name="Name" >
                                            <h2>Actions</h2>
                                            <div class="btns-action">
                                                <button type="submit" name="Online-actiont" >Turn Online</button>
                                                <button type="submit" name="Offline-actiont" >Turn Offline</button>
                                                <button type="button" id="actiont-close" name="close" >Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </dialog>
                        </div>
                                                <!-- TABLE -->
                                <?php
                                $tournaments_Created = 0;
                                echo"<div class='container-table'>";

                                    if($_SESSION["user"] == 'Admin'){
                                        echo"<div class=container-content><span class='text-up'><h2>Name</h2></span><span class='text-up'><h2>Status</h2></span><span class='text-up'><h2>Creator</h2></span><span class='text-up'><h2>Password</h2></span><span class='text-up'><h2>Private</h2></span><span class='text-up'><h2>Game</h2></span><span class='text-up'><h2>Description</h2></span><span class='text-up'><h2>MixedList</h2></span><span class='text-up'><h2>Auto</h2></span></div>";
                                    }else{
                                        echo"<div class=container-content><span class='text-up'><h2>Name</h2></span><span class='text-up'><h2>Status</h2></span><span class='text-up'><h2>Password</h2></span><span class='text-up'><h2>Private</h2></span><span class='text-up'><h2>Game</h2></span><span class='text-up'><h2>Description</h2></span><span class='text-up'><h2>MixedList</h2></span><span class='text-up'><h2>Auto</h2></span></div>";
                                    }
                                    
                                    echo "<div class='container-grid'  id='Tournaments_Created' >";
                                        for ($i = 1; $i <= $tournaments; $i++)
                                            {   
                                                $Creator = $api["Creator" . $i];
                                                if($_SESSION["user"] == 'Admin'){
                                                    
                                                    $Name = $api["Name" . $i];
                                                    $PW = $api["PW" . $i];
                                                    $Private = $api["Private" . $i];
                                                    $Game = $api["Game" . $i];
                                                    $Description = $api["Description" . $i];
                                                    $MixedList = $api["MixedList" . $i];
                                                    $Status = $api["Status" . $i];
                                                    $Auto = $api["Auto" . $i];
                                                    $id = $i; 
                                                    echo"<div class='container-gridT'><span  value='$Name' class='text'>$Name</span><span class='text' value='$Status'>$Status</span><span  value='$Creator' class='text'>$Creator</span><span value='$PW' class='text camp'>$PW</span><span  value='$Private' class='text camp'>$Private</span><span value='$Game' class='text'>$Game</span><span value='$Description' class='text'>$Description</span><span value='$Creator' class='text'>$Creator</span><span  value='$Auto' class='text camp'>$Auto</span></div>";
                                                }

                                                
                                                if($Creator == $_SESSION["user"]){
                                                $Name = $api["Name" . $i];
                                                $PW = $api["PW" . $i];
                                                $Private = $api["Private" . $i];
                                                $Game = $api["Game" . $i];
                                                $Description = $api["Description" . $i];
                                                $MixedList = $api["MixedList" . $i];
                                                $Status = $api["Status" . $i];
                                                $Auto = $api["Auto" . $i];
                                                $tournaments_Created++;
                                                echo"<div class='container-gridT' value='$tournaments_Created'><span  value='$Name' class='text'>$Name</span><span class='text' value='$Status'>$Status</span><span value='$PW' class='text camp'>$PW</span><span  value='$Private' class='text camp'>$Private</span><span value='$Game' class='text'>$Game</span><span value='$Description' class='text'>$Description</span><span value='$MixedList' class='text'>$MixedList</span><span  value='$Auto' class='text camp'>$Auto</span></div>";
                                            }
                                        }
                                    echo"</div>";
                                echo"</div>";
                        ?>
                    </div>
                </div>
            </div>
            <div class="tabs">
                <div class="faq">
                    <h1>FAQ</h1>
                </div>
            </div>
            <div class="tabs">
                <div class="perfil">
                    <div class="content">
                        <div class="title">
                            <h2><?php echo $_SESSION["user"] ?></h2>
                        </div>
                        <div class="submenu">
                            <li class="options" id="infop">INFO</li>
                                <dialog class="short-modal" id="infop-modal">
                                    <button class="close" id="infop-close">&times;</button>
                                    <h2>Information</h2>
                                    <?php 
                                        echo "<p id='maxRoom' value='$maxRings'>Max Rings Available = $maxRings </p>";
                                        echo "<p id='maxTournament' value='$maxTournament'>Max Tournaments Available = $maxTournament </p>";
                                    ?>
                                </dialog>
                            <li class="options" id="editp">EDIT</li>
                            <li class="options"><a href="./src/logout.php">LOGOUT</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </main>
<script src="./src/jquery-3.6.0.min.js"></script>
<script src="./index.js"></script>
<script src="./src/modal.js"></script>
</body>
</html>