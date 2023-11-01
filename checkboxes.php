<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkboxes.php" method="post" >
        <input type="checkbox" name="pizza" value="Pizza" >
        Pizza <br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        Hamburger <br>
        <input type="checkbox" name="hotdog" value="Hotdog" >
        Hotdog <br>
        <input type="checkbox" name="taco" value="Taco" >
        Taco <br>
        <input type="submit" name="order" value="Order" >
        
    </form>
</body>
</html>

<?php 
    
    $order = null;
    
    if(isset($_POST['order'])){
   
        if(isset($_POST['pizza'])){
            echo"I mean who doesn't like good pizza! <br/>";
        } 
        if(empty($_POST['pizza'])){
            echo'poor you.... <br/>';
        } 
        if(isset($_POST['hamburger'])){
            echo 'Big pun and meat! <br/>';
        } 
        if(empty($_POST['hamburger'])){
            echo "if it's because the lesser meat, i agree <br/>";
        } 
        if(isset($_POST['hotdog'])){
            echo "The sausage is kinda sus, not gonna lie! <br/>";
        } 
        if(empty($_POST['hotdog'])){
            echo 'never my fav anyway <br/>';
        } 
        if(isset($_POST['taco'])){
            echo 'Spicy hot jalapeno is my fav! <br/>';
        }  
        if(empty($_POST['taco'])){
            echo 'mexican cartel is on your front door <br/>';
        }      
        
     
    }
        // if(isset($_POST['order'])){  
        //     $foods = $_POST['foods'];

        //     foreach($foods as $food){
        //         echo $food . "<br/>";
        //     }
        // }
?>