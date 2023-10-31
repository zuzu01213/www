<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math-functions.php" method="post" >
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


    // LESSON 4
    // MATH FUNCTIONS 

    // $total = abs($x);
    // $total = round($x);
    // $total = ceil($x);
    // $total = floor($x);
    // $total = sqrt($x);
    // $total = pow($x , $y);
     $total = max($x , $y ,$z);
    // $total = min($x , $y ,$z);
    // $total = pi();
    // $total = rand(1, 2);

    echo $total;
?>