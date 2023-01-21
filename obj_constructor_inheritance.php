<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//example to use constructor and object of a class
class Birds {
// properties
public $bird_flies='sky';
// the constructor is called when object is created
public function __construct() {
echo 'In the Base Class Constructor';
}
}
class EagleBird extends Birds {
function __construct() {
parent::__construct();
}
public function BirdDoes() {
return $this->bird_flies;
}
}
//object of class is declared
$obj = new EagleBird();
echo '<br> Method : ' .$obj->BirdDoes();
?>

</body>
</html>