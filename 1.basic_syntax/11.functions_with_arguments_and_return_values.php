<?php

/**
 * PHP functions are defined with the keyword function.
 * Functions are called like in any other high-level programming language.
 **/

//function definition, with a parameter and a return value
function get_something($very_special) {
  return "Something " . $very_special;
}

//function call with an argument, storing the return value in a variable
$something = get_something("fantastic");
print($something);

?>