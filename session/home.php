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
    This is the home page <br>
    <a href="index.php">This goes to index page</a> <br>
</body>
</html>

<?php 

    echo $_SESSION["usernames"] . "<br>";
    echo $_SESSION["password"] . "<br>";


?>