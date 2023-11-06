<?php 

    $password = "zuzu123";

    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    if(password_verify("zuzu123", $hash)){
    echo "you are logged in";
    } else {
        echo "incorrect password";
    }
?>