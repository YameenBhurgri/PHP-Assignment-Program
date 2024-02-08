<?php

    // marks of subjects with value initialization
    $math = 50;
    $biology = 60;
    $chemistry = 70;
    $sindhi = 80;
    $urdu = 50;

    // total marks

    $totalMarks = $math + $biology + $chemistry + $sindhi + $urdu;

    $percentage = ($totalMarks / 500) * 100;
    if($percentage >= 80 && $percentage <= 100)  {
        $grade =  "A Grade";
    }else if($percentage >= 60 && $percentage < 80){
        $grade = "B Grade";
    }else if($percentage >= 50 && $percentage < 60){
        $grade = "C Grade";
    }else if($percentage >= 40 && $percentage < 50){
        $grade = "D Grade";
    }else if($percentage < 40){
        $grade = "F Grade";
    }else{
        echo "Invalid Percentage";
    }
    echo "<b style='text-align: center'> Marksheet </b> <br />";
    echo "Math Marks " . $math . "<br />";
    echo "biology Marks " . $biology . "<br />";
    echo "Chemistry Marks " . $chemistry . "<br />";
    echo "Sindhi Marks " . $sindhi . "<br />";
    echo "Urdu Marks " . $urdu . "<br />";
    echo "Total Marks " . $totalMarks . "<br />";
    echo "Total Percentage " . $percentage . "<br />";
    echo "Grade " . $grade . "<br />";



    

?>