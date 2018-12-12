<?php

class Cat {
  //declare private variables that will be inaccessible to scripts outside of this class
  private $name;
  private $age;

  //function __construct is a "constructor function", which means it is called automatically when a new object is created
  public function __construct($name) {
    $this->name = $name;
  }

  public function meow() {
    echo "{$this->name} says 'meow'";
  }

  //example of a static function - these are not dependent on any particular instance of this class
  //in fact you CANNOT use the variable $this in this function
  public static function scratch() {
	echo "Meow, that feels good";
  }
  
  //this is a setter function - it allows you to set the value of a private property of this class
  public function setAge($age) {
	$this->age = $age;
  }
  //this is a getter function - it allows you to get the value of a private property of this class
  public function getAge() {
	return $this->age;
  }
  
} //end class

?>