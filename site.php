<!-- <?php
    // $name = "Bro Code";
    // $food = "Pizza";
    // $email = "fake@gmail";

    // $age = 18;
    // $users = 2;
    // $quantity = 3;

    // $gpa = 4.0;
    // $price = 4.99;
    // $tax_rate = 5.1;

    // $employed = true;
    // $online = false;
    // $for_sale = true;

    // echo "Hello {$name} <br> ";
    // echo "You like $food <br>";
    // echo "Your email is $email<br>";

    // echo "You are $age old <br>";
    // echo "There are $users user online";
    // echo "You would like to buy $quantity items <br>";

    // echo "Your gpa is: $gpa <br>";
    // echo "Your pizza is $$price <br>";
    // echo "The sales tax rate is: $tax_rate% <br>";

    // echo "Online status: $online <br>";

    // echo "You have ordered {$quantity}x $food<br>";
    // $total = $quantity * $price;
    // echo "Your total is: $$total <br>"


    // Arithmetic operators
    // + - * / ** %
    // $x = 10;
    // $y = 3;
    // $z = null;

    // // $z = $x + $y;
    // // $z = $x - $y;
    // // $z = $x * $y;
    // // $z = $x / $y;
    // // $z = $x ** $y;
    // // $z = $x % $y;
    // echo $z

    // Increment/Decrement operators

    // $counter = 0;
    // $counter++;
    // $counter+=100;
    // echo $counter

    // Operator Precedence
    /* () 
       ** 
       *  /  % 
       +  -
     */

    // $total = ((1 + 2) -3) * 4 / 5 ** 6 ;
    // echo $total;
?> -->

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

<?php
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";

?> -->

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

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="post" >
    <label for="">X:</label>
    <input type="text" name="X" id="">
    <input type="submit" value="total"  >
    </form>
</body>
</html>
<?php 
    $x = $_POST["X"];
    $total = null;
    $total = abs($x);
    echo $total;
?>
