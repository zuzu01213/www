<?php
    $counter = 0;
        for($i = 100; $i <=$counter; $i++){
             if($i % 3 === 0 && $i % 5 === 0){
                echo "FizzBuzz <br>";
             }
             else if($i % 3 ===0){
                echo "Fizz <br>";
             }
             else if($i % 5 ===0){
                echo "Buzz <br>";
             }
             else {
                echo $i. "<br>";
             }
        }
    
        // for ($i = 1; $i <= 100; $i++) {
        //     switch (true) {
        //         case ($i % 3 == 0 && $i % 5 == 0):
        //             echo "FizzBuzz <br>";
        //             break;
        //         case ($i % 3 == 0):
        //             echo "Fizz <br>";
        //             break;
        //         case ($i % 5 == 0):
        //             echo "Buzz <br>";
        //             break;
        //         default:
        //             echo $i . "<br>";
        //     }
        // }
 
    ?>