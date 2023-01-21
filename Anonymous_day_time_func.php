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
// anonymous function
$arr = [10,3,70,21,54];
usort ($arr, function ($x , $y) {
   return $x > $y;
});
foreach ($arr as $x){
   echo $x . " </br>";
}
echo "Today's date is : </br>";
  $today = date("d/m/Y");
  echo "$today</br>";

  $timestamp = time();
  echo($timestamp);
  echo "</br>";
  echo(date("F d, Y h:i:s A", $timestamp));


?>

</body>
</html>