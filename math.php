 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try php for the first time</title>
</head>
<body>
    <form action="math.php" method="post" >
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
?>