<?php 

        // LESSON 5

        // IF AND ELSE STATEMENT

        $age = 23;
        $adult = true;
        $pay = 10;
        $weekly_pay = null;
    
            // SALARY STATEMENT
    
        if ($adult === true && $age >= 17 && $age <= 20 ) {
            $weekly_pay = $pay;
            echo "Your pay is: {$weekly_pay}$ <br>";
        } 
        else if ($adult === true && $age >= 21 && $age <= 30 ) {
            $weekly_pay = $pay * 3;
            echo "Your pay is: {$weekly_pay}$ <br>";
        }  
        else if ($adult === true && $age >= 31 && $age < 50 ) {
            $weekly_pay = $pay * 5;
            echo "Your pay is: {$weekly_pay}$ <br>";
        }   
        else if ($adult === true && $age >=50 && $pay >=0 ) {
            $weekly_pay = $pay * 10;
            echo "Because you are retirement, Your pay is: {$weekly_pay}$ <br>";
        }
        else if ($adult === true && $age >= 17 && $pay <0  ) {
            $weekly_pay = $pay * 1000;
            echo "Because you are lying, You deserve to get debt by total {$weekly_pay}$ <br>";
        }  
        else {
            $weekly_pay = $pay * 0;
            echo " Because you don't even have a job, Your pay is: {$weekly_pay}$ <br>"; 
        }
    
        
            //  ADULT CONFIRMATION
    
        if ($adult === true && $age >= 17) {
            echo "You may enter <br>";
        } else {
            echo "You must be an adult to enter this site <br>";
        }
    
            // AGE CONFIRMATION
    
        if ($age >= 17 && $age <=20 && $adult === true) {
            echo "I see you in that phase right now don't you?";
        } 
        else if($age >= 0 && $age <=5 && $adult === false) {
            echo"Please enter your age correctly" ;
        } 
        else if($age >= 100){
            echo "aren't you to a little to old for this?";
        } 
        else if($age >= 6 && $age <= 13){
            echo "Go way kiddo, you can't even produce semen right now.";
        } 
        else if($age >=20 && $age <= 29){
            echo "Man, this is your golden age don't waste your time on this shit. <hr>";
        } 
        else if($age >=30 && $age <= 35){
            echo "This is just sad, like really you are pathetic.";
        } 
        else if($age >= 35 && $age <=100){
            echo "Ugh, i wanna throw up just by looking at you!!!";
        } 
        else if($age <=0){
            echo "You haven't even born yet.";
        } else {
            echo "You must be 18+ yo enter";
        }
        
    
    ?> 
    
    