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
//example to access properties of a class
class Birds {
// properties
public $birdsFly = 'sky';
public $birdsSound = 'vocal';
public $birdsBuildNests = 'trees';
//methods
public function birdDoes()
{
echo 'Bird';
}
}
//object of class is declared
$obj = new Birds();
//properties of class Bird are accessed using object
echo '<br>  Bird Flies =  '.$obj->birdsFly;
echo '<br>  Bird Makes Sound = '.$obj->birdsSound;
echo '<br>  Bird Build Nests = '.$obj->birdsBuildNests;
?>
</body>
</html>