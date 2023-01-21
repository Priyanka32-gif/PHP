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
    //reducing an array
    $addItUp = function ($runningTotal, $currentValue)
{
$runningTotal += $currentValue * $currentValue;
return $runningTotal;
};
$numbers = array(2, 3, 5, 7);
$total = array_reduce($numbers, $addItUp);
echo $total;

echo"</br>";
//searching for values
function hasRequired($array, $requiredFields) {
    $array =
    $keys = array_keys ( $array );
    foreach ( $requiredFields as $fieldName ) {
    if (! in_array ( $fieldName, $keys )) {
    return false;
    }
    }
    return true;
    }
    if ($_POST ['submitted']) {
    $testArray = array_filter($_POST);
    echo "<p>You ";
    echo hasRequired ( $testArray, array (
    'name',
    'email_address'
    ) ) ? "did" : "did not";
    echo " have all the required fields.</p>";
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<p>
 Name: <input type="text" name="name" /><br /> Email address: <input
type="text" name="email_address" /><br /> Age (optional): <input
type="text" name="age" />
</p>
<p align="center">
<input type="submit" value="submit" name="submitted" />
</p>
</form>

</body>
</html>