<?php session_start(); ?>
<?php

    $x = $_POST['card_number'];

    $D = 0;
    $C = 0;
    $sum1 = 0;
    $sum2 = 0;
    $sum3 = 0;
    $sum4 = 0;
    echo $x;
    if($x>999999999999 && $x<10000000000000){
        $C = 1;//13 DIGIT
        $D = 1000000000000;
    }
    else if($x>99999999999999 && $x<1000000000000000){
        $C = 2;//15 DIGIT
        $D = $x/10000000000000;
    }
    else if($x>999999999999999 && $x<10000000000000000){
        $C = 3;//16 DIGIT
        $D = $x/1000000000000000;
    }
    else{
        echo "Invalid Card Number" ;
        header("Location: http://localhost/Card_Validator_UI1//response.php?error='Invalid Card Number'");
        exit;
    } 
    $y = $x;
    $x = $x/10;          // Getting the second last digit
    while($x != 0){          // To get twice of the alternet digits from the 2nd last position
        $m = $x%10;
        $x = $x/100;
        $n = 2*$m;            // I'm using if else for seperating the 2 digit numbers from 1 digit numbers which later has to be added   
        if($n >= 10){
            while($n!=0){
                $d = $n%10;
                $n = $n/10;
                $sum4 = $sum4 + $d;   // I seperated the 2 digit numbers and wrote them as 1 digit  4+4+8+1+8+8+1+8+8  
            }  
        }
        else{             // It's the single digit number from the 2nd last position
            $sum3=$sum3+$n;
        }  
    }
    $z=$sum3+$sum4;       // SUM NUMBER 2 IS HERE
    {   
    { while($y!=0){      // I have calculated the sum of the digits from the last
            $c = $y%10;
            $y = $y/100;
            $sum1+= $c;            //SUM NUMBER 1 IS HERE  
        }
    }          
  }    
  $checksum = $z + $sum1;
    if ($checksum % 10 == 0){
        echo "Card is Valid" ;
        header("Location: http://localhost/Card_Validator_UI1//response.php?success=1");
        exit;
        // if( $C==3 && $D==4){
        //     //The above code was for 13 digit cards.
        //     header("Location: http://localhost/Card_Validator_UI1//response.php?success=1&cardType=Visa");
        //     exit;
        // }
        // else if( ($C==3) && (($D==5.1)||($D==5.2)||($D==5.3)||($D==5.4)||($D==5.5))){
        //     //The above codes were for 16 digit cards
        //     header("Location: http://localhost/Card_Validator_UI1//response.php?success=1&cardType=Master");
        //     exit;
        // }
        // else if(($C==2) && (($D==34)||($D==37))){
        //     //The above code was for 15 digit cards
        //     header("Location: http://localhost/Card_Validator_UI1//response.php?success=1&cardType=American");
        //     exit;
        // }
        // else( ($C == 1 || $C == 3) && ($D == 4)){
        //     header("Location: http://localhost/Card_Validator_UI1//response.php?success=1&cardType=Visa")
        //     // exit;
        // }
    }
    else{
        echo "Card is not valid" ;
        header("Location: http://localhost/Card_Validator_UI1//response.php?success=0");
        exit;
    }

?>