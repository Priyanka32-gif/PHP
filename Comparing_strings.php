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
    $string1 = 'first string';
    $string2 = 'second string';
     
    if ($string1 == $string2) {
        echo 'Strings are equal';
    }
    else {
        echo "Strings are not equal </br>";
    }
    //strcmp()
    echo strcmp('I like PHP', 'I like PHP');

    echo"</br>";
    //strcasecmp()
    echo strcasecmp('Pineapple', 'pineapple');
    echo"</br>";
    //strlen()
    $my_str = 'Welcome to Tutorial Republic';
    echo strlen($my_str);

    echo"</br>";
    //reversing sting
    echo strrev($my_str);

    ?>
</body>
</html>