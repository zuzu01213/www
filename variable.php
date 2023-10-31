<?php

    // LESSON 1
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

?> 