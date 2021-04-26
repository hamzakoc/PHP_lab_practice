<?php
$string = " My name is Nicoleta, Nicoleta is my name";
$string_array= preg_split("//", $string);
print_r($string_array);

echo "<br>";
$keywords = preg_split("/[\s,]+/", $string);
print_r($keywords);