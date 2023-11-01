<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post"  >
        <input type="radio" name="credit_card" value="Visa" >
        Visa <br>
        <input type="radio" name="credit_card" value="MasterCard">
        MasterCard <br>
        <input type="radio" name="credit_card" value="American Express">
        American Express <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php 
    $credit_card = null;

    if(isset($_POST['credit_card'])){
        $credit_card = $_POST['credit_card'];
    }
    
    // if ($credit_card === "Visa"){
    //     echo "You selected Visa";
    // } else if ($credit_card === "MasterCard"){
    //     echo "You selected MasterCard";
    // } else if ($credit_card === "American Express"){
    //     echo "You selected American Express";
    // }

    switch($credit_card){
        case "American Express":
            echo "You selected American Express";
            break;
        case "MasterCard":
            echo "You selected MasterCard";
            break;
        case "Visa":
            echo "You selected Visa";
            break;
        default: 
        echo "Please select a credit card to continue";
    }
?>