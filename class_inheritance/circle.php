<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangles</title>
</head>
<body>
<?php
$pi = 3.14;
class circle {
  public $radius;
  public function __construct($radius) {
    $this->radius = $radius; 
  }
  public function Intro($pi) {
    echo $pi*($this->radius * $this->radius); 
  }
}

class area extends circle {
  public function message() {
    echo "The radius of the Circle is {$this->radius}. <br> ";
    echo "And The area of Circle is: ";
  }
}

$area = new Area(5);
$area->message();
$area->intro($pi);
?>
</body>
</html>