<?php 
    
        // LESSON 6
        
        // logical operations = combine conditional statements
        // if(!condition1)
    
        // && = True if both condition are true
        // || = True if at least one condition is true
        // ! = true if false. false if true.
    
        $temp = 11;
        $weather = false;
        $age = 25;
        $citizen = false;
    
        if($temp < 0 || $temp > 30){
            echo "The weather is good. <br>";
        } 
        else {
            echo "The weather is bad. <br>";
        }
        if(!$weather && $temp < 0 || $temp > 30){
            echo "It's sunny. <br>";
        } else {
            echo "It's cloudy. <br>";
        }
    
        if($age >= 18 && !$citizen){
            echo "You can vote for presidents of the weather. <br>";
        } else if($age >= 18 && $citizen){
            echo "You can't vote for presidents of the weather.<br>";
        }
    
        $child = true;
        $senior = false;
        $ticket = null;
    
        if($child || $senior){
            $ticket = 10;
        }
        else {
            $ticket = 15;
        }
        echo"The ticket prize is: $$ticket.";
    ?>