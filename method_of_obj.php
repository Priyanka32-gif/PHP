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
//example to access methods of a class
class Birds {
// properties
public $birdsFly;
public $birdsBuildNests;
//method 1  - set Method1
public function set_birdFlies($input) {
$this->birdsFly = $input ;
}
//method 1 - get Method1
public function get_birdFlies() {
return $this->birdsFly;
}
//method 2  - set Method2
public function set_BirdBuildsNest($input) {
$this->birdsBuildNests = $input ;
}
//method 2 - get Method2
public function get_BirdBuildsNest() {
return $this->birdsBuildNests;
}
}
//object of class is declared
$obj = new Birds();
$obj->set_birdFlies('Fly');
echo '<br>  Bird Flies =  '.$obj->get_birdFlies();
$obj->set_BirdBuildsNest('Trees');
echo '<br>  Bird Builds Nest =  '.$obj->get_BirdBuildsNest();
?>
</body>
</html>