<?php
//while
$x=1;
while($x<5){
	echo $x." ";
	$x++;
}
echo "<br>";
echo "<br>";


//for
for($x=10;$x>=0;$x--){
	echo $x."<br>";
}
echo "<br>";

//do while
$y=1;
$z=2;
do{
	echo $y*$z."<br>";
	$y++;
}
while($y<5);
echo "<br>";

//for each
$cars=array("Audi","Volvo","BMW");
	foreach($cars as $c){
		echo $c."<br>";
	}

?>