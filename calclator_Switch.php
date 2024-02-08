<?php
// in this program men calcultor depend your variable $op py hae
// in php using switch case
    $num1 = 300;
    $num2 = 200;
    $op = "-";
switch(true){
    case (($op=="+")):
        $res= $num1+$num2; 
        echo "the Addition of these two number is " .$res;
        break;
    case (($op=="-")):
        $res= $num1-$num2; 
        echo "the Subtraction of these two number is " .$res;
        break;

    case(($op=="*")):
        $res =$num1*$num2; 
        echo "the multiplaction of these two number is " .$res;
        break;
    case(($op=="/")):
        $res= $num1/$num2; 
        echo "the division of these two number is " .$res;
        break;
        default:
        echo "invalid operator symble that has no case defined";


}
    
      
?>