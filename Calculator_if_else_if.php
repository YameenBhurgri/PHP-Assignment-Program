<?php
    $a = 9; 
    $b = 3;
    $op = "*";
    if($op == "+"){
        $res = $a + $b;
        echo "Addition of Two number is " . $res . "<br />";
    }else if($op == "-"){
        $res = $a - $b;
        echo "Subtraction  of Two number is " . $res . "<br />";
    }
    else if($op == "*"){
        $res = $a * $b;
        echo "multiply of Two number is " . $res . "<br />";
    }else if($op == "/"){
        $res = $a / $b;
        echo "Division of Two number is " . $res . "<br />";
    }else if($op == "%"){
        $res = $a % $b;
        echo "modulus of Two number is " . $res . "<br />";

    }else{
        echo "Invalid Operation";
    }
    
?>