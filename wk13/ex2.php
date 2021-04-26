<?php

    $string = " Myname is Nicoleta, Nicoleta is my name";
    echo preg_match("/Nicoleta/", $string);
    echo "<br>";

    echo preg_match("/\d./", $string);
    echo "<br>";


echo preg_match("/a|y/", $string);
echo "<br>";



echo preg_match("/[abc]/", $string);
echo "<br>";

echo preg_match("/[a-z]/", $string);
echo "<br>";

echo preg_match("/[A-Z]/", $string);
echo "<br>";

echo preg_match("/[0-9]/", $string);
echo "<br>";

echo preg_match("/[a-zA-Z]/", $string);
echo "<br>";

echo preg_match("/[^a-z]/", $string);
echo "<br>";

echo preg_match("/[N*]/", $string, $array);
print_r($array);
echo "<br>";

echo preg_match("/l.+/", $string, $array);
print_r($array);
echo "<br>";


echo preg_match("/[N.*m]/", $string);
echo "<br>";


$string = " Myname is 1Nicoleta2, Nicoleta is my name";
echo preg_match("/1.*2Nicoleta/", $string,$array);
print_r($array);
echo "<br>";



$string = " Myname is 1Nicoleta2, Nicoleta is my name";
echo preg_match("/N{1}/", $string,$array);
print_r($array);
echo "<br>";



echo preg_match("/^M/", $string);
echo "<br>";

echo preg_match("/e$/", $string);
echo "<br>";

echo preg_match("/^M.*e$/", $string);
echo "<br>";




























?>