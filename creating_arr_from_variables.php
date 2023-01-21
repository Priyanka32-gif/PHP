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
//using compact function
$firstname = "Peter";
$lastname = "Griffin";
$age = "41";

$result = compact("firstname", "lastname", "age");

print_r($result);
echo"</br>";
//transversing array with foreach construct
$addresses = array("spam@cyberpromo.net", "abuse@example.com");
foreach ($addresses as $value) {
echo "Processing {$value}\n";
}
echo"</br>";
//using loop
$addresses = array("spam@cyberpromo.net", "abuse@example.com");
$addressCount = count($addresses);
for ($i = 0; $i < $addressCount; $i++) {
$value = $addresses[$i];
echo "{$value}\n";
}

echo"</br>";
//using function for each array
$printRow = function ($value, $key)
{
print("<tr><td>{$key}</td><td>{$value}</td></tr>\n");
};
$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
echo "<table border=1>";
array_walk($person, $printRow);
echo "</table>";

?>

/
</body>
</html>