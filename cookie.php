<?php 
    // cookie = Information about user stored in a user's web browser
    // targeted advertisement, browing preferences, and other non-sensitive data
    
    setcookie("fav_food","pizza", time() + (86972 * 2),"/");
    setcookie("fav_drink","coffee", time() + (86972 * 2),"/");
    setcookie("fav_dessert","ice cream", time() + (86972 * 2),"/");

    foreach($_COOKIE as $key => $value){
        
    }
    if(isset($_COOKIE["fav_food"])){
        echo "Buy Some  {$_COOKIE["fav_food"]}!!!";
    } 
    else {
        echo "I don't know your favorite food!";
    }

?>