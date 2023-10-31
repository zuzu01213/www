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

<?php 
        // IF AND ELSE STATEMENT

    $age = 12;
    $adult = true;
    if ($adult === true && $age >= 17) {
        echo "You may enter <br>";
    } else {
        echo "You must be an adult to enter this site <br>";
    }

    if ($age >= 17 && $age <=20 && $adult === true) {
        echo "I see you in that phase right now don't you?";
    } else if($age >= 0 && $age <=5 && $adult === false) {
        echo"Please enter your age correctly";
    } else if($age >= 100){
        echo "aren't you to a little to old for this?";
    } else if($age >= 6 && $age <= 13){
        echo "Go way kiddo, you can't even produce semen right now.";
    } else if($age >=20 && $age <= 29){
        echo "Man, this is your golden age don't waste your time on this shit.";
    } else if($age >=30 && $age <= 35){
        echo "This is just sad, like really you are pathetic.";
    } else if($age >= 35 && $age <=100){
        echo "Ugh, i wanna throw up just by looking at you!!!";
    } else if($age <=0){
        echo "You haven't even born yet.";
    }
    else {
        echo "You must be 18+ yo enter";
    }

?>

