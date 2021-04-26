<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favourite City</title>
</head>
<body>

<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$fixed_num = 5;
$result = $num1+$fixed_num;
echo "$fixed_num added to the $num1. The result is $result <br>" ;

$result = $num1-$fixed_num;
echo "$fixed_num subsracted from the $num1. The result is $result <br>";


$result = $num1*$fixed_num;
echo "$fixed_num multiplied by $num1. The result is $result <br>";


$result = $num2/$fixed_num;
echo "$fixed_num divided by $num2. The result is $result <br>";

echo "$num2 incremented by 1.";
$num2++;
echo "The result is $num2 <br>";

echo "$num1 decremented by 1.";
$num1--;
echo "The result is $num1 <br>";

echo "The first value type is: " . gettype($num1). "<br>";
echo "The second value type is: " . gettype($num2). "<br>";

?>
</body>
</html>







