<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="post">
    <label for="">Enter a country</label> <br>
    <input type="text" name="country">
    <input type="submit">
    </form>
</body>
</html>
<?php

    // LESSON 11
    // associative array = array made of key=>value pairs
    
    $capitals = array("USA"=>"WASHINGTON D.C",
                        "JAPAN"=>"TOKYO",
                        "SOUTH KOREA"=>"SEOUL",
                        "INDIA"=>"NEW DELHI");


    $capital = $capitals[$_POST["country"]];
    echo $capital;

?> 