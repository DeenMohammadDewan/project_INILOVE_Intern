<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectangles</title>
</head>
<body>
<?php
class rectangle {
  public $legth;
  public $width;
  public function __construct($length, $width) {
    $this->length = $length;
    $this->width = $width; 
  }
  public function Intro() {
    echo $this->length * $this->width; 
  }
}

class area extends rectangle {
  public function message() {
    echo "The length of the Rectangle is {$this->length} and the width is {$this->width}. <br> ";
    echo "And The area of Rectangle is: ";
  }
}

$area = new Area(50, 60);
$area->message();
$area->intro();
?>
</body>
</html>