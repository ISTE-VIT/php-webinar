<?php
//integers
$x=50;
echo $x."<br>";

//doubles
$y=50.236;
echo $y+$x."<br>";

//string
$string="PHP is a scripting language";
echo $string." and open source."."<br>";

//array
$cars=array("Audi","BMW","Volvo");
echo $cars[1]."<br>";

//object
class Fruit {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
$apple = new Fruit();
$apple->set_name("Apple");
echo $apple->get_name();
?>