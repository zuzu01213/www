<?php 
    $username = array("Keenan", "GOAT");
    $phone = "123-456-789";

    //$username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 15, " Rahmanda");
    // $phone = str_replace("123-","666-", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username, "KEENAN");
    // $count = strlen($phone);
    // $index = strpos($phone, "-");
    // $first = substr($username, 0, 6);
    // $last = substr($username, 1);
    // $full = explode(" ", $username);
    $username = implode(" ", $usernames);
    
    foreach ($full as $name){
        echo $name . "<br>";
    }
?>