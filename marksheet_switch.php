
<?php
 // creating a marksheet  in php using switch case statement
 // ye functionality marksheet ki hae
 // obtain marks
 // percentage 
 // grade 
 // fail

// $english 
// $math 
// $bio 
// $urduc 
// $sindhi 

 $english  = 50;
 $math  = 50;
 $bio  = 50;
 $urdu   = 50;
 $sindhi   = 50;

$totalMarks = 500;

$obtainedMarks = $english + $math + $bio + $urdu + $sindhi;

$percentage = ($obtainedMarks / $totalMarks) *100;
switch(true){
    case( ($english < 40 || $math < 40 || $bio < 40 || $urdu < 40 || $sindhi < 40) ):
        echo "Grade F " . "<br />";
            break;
    case (($percentage >= 90)):
        echo "Grade A " . "<br />";
            break;  
    case(($percentage >= 80)):
        echo "Grade B" . "<br />";
            break;
    case(($percentage >= 70)):
        echo "C Grade" . "<br />";
            break;
    case(($percentage >= 60)):
        echo "D Grade" . "<br />";
            break;
    case(($percentage >= 50)):
        echo "F Grade" . "<br />";
            break;
        
    default: 
        echo "invalid Marks";
}

// print marksheet
    echo " MARKSHEET <br />";
    echo "Subject Marks <br />";
    echo "-------------------------------------------------- <br/>";

    echo "subject English " . $english . "<br />";
    echo "subject Math" . $math . "<br/>";
    echo "subject Biology" . $bio . "<br/>";
    echo "subject Urdu". $urdu . "<br/>";
    echo "subject Sindhi" . $sindhi . "<br/>";
    
    echo "-------------------------------------------------- <br/>";

    echo "Total Marks " . $totalMarks . "<br / >";
    echo "-------------------------------------------------- <br/>";
    echo "Obtain Marks " . $obtainedMarks . "<br />";
    echo "-------------------------------------------------- <br/>";
    echo "Your Percentage " . $percentage . " <br />";













?>
