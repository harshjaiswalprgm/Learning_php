<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Practice folder</h1>
    
<?php
$txt = "PHP"; //declaration and storing the value 
echo "heyyyy $txt"; //and accessing right here

echo "<br>"; // line break
echo phpversion(); // To know the current version

echo "<br>"; // line break

// we can declare variable like >>> $color = 'red';
$color = "Red"; //declaration and storing the value 
echo "The color is " . $color . "<br>"; //and accessing right here
// echo "The color is " . $Color . "<br>"; //and accessing right here

$value = 5;
var_dump($value);  //To get the data type of a variable, use the var_dump() function.

echo "<br>"; // line break

var_dump(5);echo "<br>"; // line break
var_dump("John");echo "<br>"; // line break
var_dump(3.14);echo "<br>"; // line break
var_dump(true);echo "<br>"; // line break
var_dump([2, 3, 56]);echo "<br>"; // line break
var_dump(NULL);echo "<br>"; // line break

echo "<br>"; // line break
$x = $y = $z = "Fruit";
echo " $y";

/*echo and print are more or less the same. They are both used to output data to the screen.
The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. 
echo can take multiple parameters (although such usage is rare) while print can take one argument. 
echo is marginally faster than print.
*/

echo "<br>"; // line break

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);

  echo "<br>"; // line break';
echo strlen("mynameisharsh");















?>
</body>
</html>