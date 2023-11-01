<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize.php" method="post" >
    Username:<br>
    <input type="text" name="username"> <br>
    Age: <br>
    <input type="text" name="age"  > <br>
    Email: <br>
    <input type="text" name="email"  > <br>
    <input type="submit" name="login" value="login" >
    </form>
</body>
</html>

<?php 

   if(isset($_POST['login'])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS); 
        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT); 
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); 


        if(empty($username)){
            echo "Please enter you username correctly <br>";
        } else {
            echo"Your username is: $username years old <br>";
        }
        
        if(empty($age)){
            echo "That number wasn't valid <br>";
        } else {
            echo"You are $age years old <br>";
        }

        if(empty($email)){
            echo "That email wasn't valid <br>";
        } else {
            echo"This is your email address: $email <br>";
        }
    }
     
    // else {
    //     echo "Please give me more details about you, it's not like im going to sell your info to china or something like that, i mean my idol is Mark Zuckerberg.  <br>";
    // }

?>