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
    <form action="home.php" method="post" >
    This is the login page <br> 
    username: <br>
    <input type="text" name="username"> <br>
    Passowrd: <br>
    <input type="password" name="password"  > <br>
    <input type="submit" name="login" value="login"> <br>
    <a href="home.php">This goes to the home page</a> <br>
    </form>
</body>
</html>
<?php 
    if(isset($_POST["login"])) {
    
        if(!empty($_POST["username"]) && !empty($_POST["password"])){

            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

          
            header("Location: home.php");
        }
        else {
            echo "Invalid username or password";
        }
    }
?>