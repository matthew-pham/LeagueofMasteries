<?php


    echo "Welcome,";
     echo "\n";
    echo $_POST['sname'];
    $sname = $_POST['sname'];
    echo "\n";
    echo "from:";
     echo "\n";
    echo $_POST['region'];
    echo "\n";
    
    //var_dump($_SERVER);
 
     $fields = array('summonerName' => $sname, 'region' => $_POST['region']);
 
      $url = "https://riotgamesapi2016-matthewpham.c9users.io/summonerHome.php?" . http_build_query($fields, '', "&");
    echo $url;
     header("Location: " . $url);
    
?>