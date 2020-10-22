<?php
//if statement
$x=10;
if($x==10){
	echo "Yes!"."<br>";
}

//if...else statement 
if($x%2==0){
	echo "Even"."<br>";
}
else{
	echo "Odd"."<br>";
}

//if...elseif...else statement
$marks=88;
if($marks>=90){
	echo "Grade A"."<br>";
}
elseif($marks>=80){
	echo "Grade B"."<br>";
}
else{
	echo "Grade C";
}

//switch statement 
$grade="E";
switch($grade){
	case "A":
	echo "Excellent"."<br>";
	break;
    case "B":
    echo "Good"."<br>";
    break;
    case "C":
    echo "Average"."<br>";
    break;
    default:
    echo "Work Hard";
}

?>