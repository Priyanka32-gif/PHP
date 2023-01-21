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
//encoding function
//htmlspecialchars
$string = 'We have to watch out for < and & as well as " and >'; 
 echo htmlspecialchars($string);

 //htmllentities
$symbols = "™ ® © • £ ¢ ¥"; 
echo "</br>Symbols: </br>" . htmlentities($symbols); 

//strip_tags
$string = '<p>Text</p><!-- Comment --><a href="link.php">Link</a>';
echo strip_tags($string);

?>

</body>
</html>