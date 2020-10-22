<?php
//Numeric array
$color=array("Red","Green","Blue");
echo $color[1]."<br>";

//Associative arrays 
$credits = array("Rohan"=>"25", "Jay"=>"22", "Priya"=>"23"); 
echo $credits['Priya']."<br>";

//Multidimensional arrays 
$course=array(
    array("Stats",3,"Theory"),       
    array("Python",4,"Lab")
);
echo $course[1][0];
?>
  