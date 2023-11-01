<?php
    // function = write some code once, reuse when you need it
    //            type () after function name to invoke
    //            example: add(), subtract(), multiply(), divide(),

    // function happy_birthday($first_name, $age){
    //     echo "Happy Birthday dear $first_name! <br/>";
    //     echo "Happy Birthday dear to you! <br/>";
    //     echo "Happy Birthday dear $first_name! <br/>";
    //     echo "You are now $age years old! <br/> <br/>";
        
    // }
    
    // happy_birthday("cid","14");
    // happy_birthday("sid","13");
    // happy_birthday("angela","20");

        // function is_even($number){
        //     $result = $number %2;
        //     return $result ;
        // }
        // if($number === 0){
        //     echo "it's even <br/>";
        // } else {
        //     echo "it's odd <br/>";
        // }
        // echo is_even(12);

      function bang(string $a , string $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return $c;
    } 
    echo bang(3,4   );
?>