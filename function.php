<?php

function add(){
	$x=5;
	$y=10;
	echo $x+$y;
}
add();
echo "<br>";

function product(int $a,int $b){
	$z=$a*$b;
	return $z;
}
echo "The product is ".product(3,4);

?>