<?php
    echo "swap value of variable <br />";
    $a = 10;
    $b = 20;
    echo " Origenal value A == " . $a . "<br />";
    echo " Origenal value B == " . $b . "<br />";
     // 10 + 20 == 30
     // $a + $b; // 30
     $a = $a + $b; // 30
      // $a = 30
      // $a - $b; // 30 - 20 == 10 
      $b = $a - $b; // 30 - 20 == 10 
      $a =  $b - $a;   //  b = 20 - a = 10


      echo " after swaping value A == " . $a . "<br />";
      echo " after swaping value B == " . $b . "<br />";
       




?>