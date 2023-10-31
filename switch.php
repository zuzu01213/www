<?php 

    // LESSON 7

    // switch = replacement to use many elseif statements
    //          more efficient, less code to write.

    $grade = "A";

    switch($grade){
        case "A":
            echo "You are Amazing!!! <br>";
            break;
        case "B":
            echo "You are Very good <br>";
            break;
        case "C":
            echo "You are Good <br>";
            break;
        case "D":
            echo "You are Poor <br>";
            break;
        case "F":
            echo "You are Fail <br>";
            break;
        default:
            echo "{$grade} is Not a grade <br>";
            break;
    }

    $day = date("l");
    $day = "sunday";

    switch($day){
        case "monday":
            echo"I hate Monday <br>";
            break;
         case "tuesday":
            echo"It is Taco Tuesday <br>";
            break;
         case "wednesday":
            echo"The work week is half over! <br>";
            break;
         case "thursday":
            echo"It's almost the weekend! <br>";
            break;
         case "friday":
            echo"The weekend is here@ <br>";
            break;
         case "saturday":
            echo"Time to party! <br>";
            break;
         case "sunday":
            echo"Zelda chill & relax <br>";
            break;
        default:
            echo"{$day} is not a day <br>";
    }
?>