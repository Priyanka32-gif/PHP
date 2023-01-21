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
    //indexed array
    $cars = array("Volvo","BMW","Toyota");
    echo"I like".$cars[0].",".$cars[1]."and".$cars[2].".";

    //loop through indexed array
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);

    for($x = 0; $x < $arrlength; $x++) {
   echo $cars[$x];
   echo "<br>";
   }

   //Associative array
   $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
   echo "Peter is " . $age['Peter'] . " years old.</br>";

// loop through associative array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

    ?>
</body>
</html>