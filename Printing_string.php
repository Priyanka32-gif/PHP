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
    // echo
    echo "First", "second", "third</br>";
    //print()
    if (print("test\n")) {
        print("It worked!");
      }
      
      //printf()
printf('The hex value of %d is %x', 214, 214);

//print_r() and var_dump()
$a = array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');
echo"</br>";
print_r($a);
echo"</br>";
var_dump($a)
    ?>

</body>
</html>