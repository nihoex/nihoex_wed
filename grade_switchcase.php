<?php

$score = 80;

switch($score) {
    case ($score >= 80) :
        $grade = "A"; 
    break;
    case ($score >= 70) : 
        $grade = "B"; 
    break; 
    case ($score >= 60) : 
        $grade = "C"; 
    break;
    case ($score >= 50) : 
        $grade = "D"; 
    break;
    default :  
        $grade = "F"; 
    break; 
}
        echo "Grade = ".$grade
    ?>