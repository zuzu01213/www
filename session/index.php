<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the login page <br>
    <a href="home.php">This goes to home page</a> <br>  
</body>
</html>


<?php 
    // SESSION = SGB used to store information on a user
    // to be across multiple pages.
    // A user is assigned a session-id
    // ex. login credentials


    $_SESSION["usernames"] = "Keenan";
    $_SESSION["password"] = "pizza123";

    echo $_SESSION["usernames"] . "<br>";
    echo $_SESSION["password"] . "<br>";
?>