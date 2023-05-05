<?php

  global $url;
  global $param;
  global $pw;

  $url = "http://186.127.231.95:8087/api";     // <-- use your game server IP
  $pw = "123456789";                    // <-- use your api password

  function Poker_API($url, $params, $assoc)
  {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
    curl_setopt($curl, CURLOPT_TIMEOUT, 30);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($curl, CURLOPT_VERBOSE, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $response = trim(curl_exec($curl));
    if (curl_errno($curl)) $cerror = curl_error($curl); else $cerror = "";
    curl_close($curl);
    $api = Array();
    if ($assoc)  // associative array result
    {
      if ($cerror != "")
      {
        $api["Result"] = "Error";
        $api["Error"] = $cerror;
      }
      else if (empty($response))
      {
        $api["Result"] = "Error";
        $api["Error"] = "Connection failed";
      }
      else  
      {
        $paramlist = Explode("\r\n", $response);
        foreach ($paramlist as $param)
        {
          $namevalue = Explode("=", $param, 2);
          $api[$namevalue[0]] = $namevalue[1];
        }
      }
    }
    else  // regular array result
    {
      if ($cerror != "")
      {
        $api[] = "Result=Error"; 
        $api[] = "Error=" . $cerror; 
      }
      else if (empty($response))
      {
        $api[] = "Result=Error"; 
        $api[] = "Error=Connection failed"; 
      }
      else  
      {
        $paramlist = Explode("\r\n", $response);
        foreach ($paramlist as $param) $api[] = $param;
      }
    }
    return $api;
  }

  
?>