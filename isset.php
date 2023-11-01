<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset.php" method="post" >
        <label for="">Username:</label>  <br>
        <input type="text" name="username" id=""> <br>
        <label for="">Password:</label> <br>
        <input type="password" name="password" id=""> <br>
        <input type="submit" name="login" value="log in" >

    </form>
</body>
</html>

<?php 
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, "".

    // $username = "Keenan";

    // echo isset($username) ."<br>";

    // if(isset($username)){
    //     echo "This variable is set"; 
    // } else {
    //     echo "This variable is not set";
    // }


    // foreach($_POST as $key => $value) { 
    //     echo "Login Success $key = $value <br>";
    //     }

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username)) {
            echo "Please enter your username <br>";
        } else {
            echo "Hello, $username <br>";
        }
        if(empty($password)) {
            echo "Please enter your password";
        } else {
            echo "Your password is: $password";
        }
    } 
?>
