<!-- <?php
    // VARIABLES DAN DATA TYPES

     $name = "Bro Code";
     $food = "Pizza";
     $email = "fake@gmail";

     $age = 18;
     $users = 2;
    $quantity = 3;

    $gpa = 4.0;
    $price = 4.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = false;
    $for_sale = true;

    echo "Hello {$name} <br> ";
    echo "You like $food <br>";
    echo "Your email is $email<br>";

    echo "You are $age old <br>";
    echo "There are $users user online";
    echo "You would like to buy $quantity items <br>";

    echo "Your gpa is: $gpa <br>";
    echo "Your pizza is $$price <br>";
    echo "The sales tax rate is: $tax_rate% <br>";

    echo "Online status: $online <br>";

    echo "You have ordered {$quantity}x $food<br>";
    $total = $quantity * $price;
    echo "Your total is: $$total <br>";


    // Arithmetic operators

    // + - * / ** %
    // $x = 10;
    // $y = 3;
    // $z = null;

    // $z = $x + $y;
    // $z = $x - $y;
    // $z = $x * $y;
    // $z = $x / $y;
    // $z = $x ** $y;
    // $z = $x % $y;
    echo $z;

    // Increment/Decrement operators

    $counter = 0;
    $counter++;
    $counter+=100;
    echo $counter;

    // Operator Precedence
    /* () 
       ** 
       *  /  % 
       +  -
     */

    $total = ((1 + 2) -3) * 4 / 5 ** 6 ;
    echo $total;
?> ---------------------------------------------------------------------------------------------------------------->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="post">
    <label for="">username</label><br>
    <input type="text" name="username"><br>
    <label for="">password</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="log in">
    </form>
</body>
</html>

        // GET DAN POST

<?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";

?> ---------------------------------------------------------------------------------------------------------------->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="get">
    <label for="">quantity:</label>
    <input type="text" name="quantity">
    <input type="submit" value="total" >

    </form>
</body>
</html>
<?php 
    $item = "pizza";
    $price = "5.99";
    $quantity = $_GET["quantity"];
    $total = null;
    $total = $quantity * $price;

    echo "You have ordered {$quantity}x {$item}s <br>" ;
    echo "Your order is: {$total}";

?> ---------------------------------------------------------------------------------------------------------------->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="post" >
    <label for="">X:</label>
    <input type="text" name="X" id="" ><br>
    <label for="">Y:</label>
    <input type="text" name="Y" id=""><br>
    <label for="">Z:</label>
    <input type="text" name="Z" id=""><br>
    <input type="submit" value="total"  >
    </form>
</body>
</html>
<?php 
    $x = $_POST["X"];
    $y = $_POST["Y"];
    $z = $_POST["Z"];
    $total = null;

    // MATH FUNCTIONS 

    $total = abs($x);
    $total = round($x);
    $total = ceil($x);
    $total = floor($x);
    $total = sqrt($x);
    $total = pow($x , $y);
    $total = max($x , $y ,$z);
    $total = min($x , $y ,$z);
    $total = pi();
    $total = rand(1, 2);

    echo $total;
?> ---------------------------------------------------------------------------------------------------------------->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try php for the first time</title>
</head>
<body>
    <form action="site.php" method="post" >
        <label for="">radius:</label>
        <input type="text" name="radius" id=""><br>
        <input type="submit" value="calculate" >
    </form>
</body>
</html>
<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $same = null;
    $volume = null;

    $circumference = 1 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    echo "Circumference = {$circumference}cm <br>";
    echo "Distance = {$area}cm^2 <br>";

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 3);
    
    echo "volume = {$volume}cm^3 <br>";

    $same = $radius * (pi()* 3) ;
    $same = round($same, 1);

    echo "same has {$same}cm laptop size <br>"
?> ---------------------------------------------------------------------------------------------------------->

<!--<?php 
        // IF AND ELSE STATEMENT

    $age = 66;
    $adult = true;
    $pay = -2;
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
        echo"Please enter your age correctly";
    } 
    else if($age >= 100){
        echo "aren't you to a little to old for this?";
    } 
    else if($age >= 6 && $age <= 13){
        echo "Go way kiddo, you can't even produce semen right now.";
    } 
    else if($age >=20 && $age <= 29){
        echo "Man, this is your golden age don't waste your time on this shit.";
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
    

?> -------------------------------------------------------------------------------------------------------->

<!--<?php 

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
?>-------------------------------------------------------------------------------------------------------->


<!--<?php 

    // switch = replacement to use many elseif statements
    //          more efficient, less code to write.

    $grade = "A";

    switch($grade){
        case "A":
            echo "You are Excellent <br>";
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
    $day = "saturday";

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
?>----------------------------------------------------------------------------------------------------->

<!--<?php

        // for loop = repeat some code a certain of times

    for($i = 1; $i <= 100; $i++){
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

    for ($i = 1; $i <= 100; $i++) {
        switch (true) {
            case ($i % 3 == 0 && $i % 5 == 0):
                echo "FizzBuzz <br>";
                break;
            case ($i % 3 == 0):
                echo "Fizz <br>";
                break;
            case ($i % 5 == 0):
                echo "Buzz <br>";
                break;
            default:
                echo $i . "<br>";
        }
    }
?>---------------------------------------------------------------------------->

<?php 

    for($i = 0; $i <=20; $i+=2) { 
        echo $i . "<br>";
    }

?>