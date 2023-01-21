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
//extracting multiple values
$my_array = array("Dog","Cat","Horse");

list($a, $b, $c) = $my_array;
echo "I have several animals, a $a, a $b and a $c.</br>";

//slicing array
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));

echo"</br>";
//splitting array into Chunks
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));

echo"</br>";
//array key function
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));

echo"</br>";
//array values
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));


?>

</body>
</html>