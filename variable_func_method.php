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
function add($x, $y){
    echo $x+$y;
 }
 $var="add";
 $var(10,20);

 class myclass{
    function welcome($name){
       echo "</br>Welcome $name";
    }
 }
 $obj=new myclass();
 $f="Welcome";
 $obj->$f("Priyanka");
 
 
?>

</body>
</html>