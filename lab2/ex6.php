<?php

echo "Twinkle,  Twinkle little star . <br>";

$twinkle = "Twinkle";
$star = "elephant";

echo "$twinkle, $twinkle little $star.<br>";

$x =10;
$y = 7;

$result = $x+$y;
echo "$x + $y = $result <br>";

$result = $x-$y;
echo "$x - $y = $result <br>";

$result = $x*$y;
echo "$x * $y = $result <br>";

$result = $x/$y;
echo "$x / $y = $result <br>";

//ex3



$num = 8;
echo "Value is now $num.  <br>";


$num +=2;
echo "Add 2. Value is now $num. <br>";


$num -=4;
echo "Substract 4. Value is now $num. <br>";

$num *=5;
echo "Multiply  5. Value is now $num. <br>";


$num /=3;
echo "Divide 3. Value is now $num. <br>";


$num ++;
echo "Increment by 1. Value is now $num. <br>";


$num --;
echo "Decrement by 1. Value is now $num. <br>";




//ex4

$num ='George';
echo "Value is " . gettype($num) . ".<br>";


$num =0.0;
echo "Value is " . gettype($num) . ".<br>";

$num =123;
echo "Value is " . gettype($num) . ".<br>";

$num =true;
echo "Value is " . gettype($num) . ".<br>";

$num =null;
echo "Value is " . gettype($num) . ".<br>";

















?>