<?php

$string="PHP is a scripting language.";
echo strlen($string)."<br>";
echo str_word_count($string)."<br>";
echo strpos($string,"a")."<br>";
echo str_replace("language", "code", $string)."<br>";


$x=100;
echo "The number is $x"."<br>";
echo 'The number is $x'."<br>";
?>