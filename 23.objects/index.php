<?php

//include the class definitions
require_once("Dog.class.php");
require_once("Cat.class.php");

//create new Dog objects
$sparky = new Dog("Sparky");
$sparky->setAge(5);

$petie = new Dog("Petie");
$petie->setAge(3);

//create a new Cat object
$choochoo = new Cat("ChooChoo");
$choochoo->setAge(10);

//call the bark methods of the Dog objects
$sparky->bark();
echo "<br />";

$petie->bark();
echo "<br />";

//call the meow method of the Cat object
$choochoo->meow();
echo "<br />";


//echo $sparky->getAge();

//call the Dog class's static function scratch()
Dog::scratch();
echo "<br />";
Cat::scratch();

?>