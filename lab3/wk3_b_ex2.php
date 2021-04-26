<?php
//arrays
//this is an index array
$colors = array(
    'Red',
    'Green',
    'Blue'
);

echo $colors[1];
echo '<br>';

print_r($colors);
echo '<br>';
sort($colors); //sort by vale asc
print_r($colors);
echo '<br>';
rsort($colors); //reverse sort by value desc
print_r($colors);


echo '<br>';
echo '<br>';

//associative array
$ages=array(
    'Peter'=>22,
    'Clark'=>32,
    'John'=>28
);

echo $ages['Clark']. ' is grater or equal to 32';
echo '<br>';
asort($ages); //asort function is sorting fucntion (asceding) for associative array
print_r($ages);

echo '<br>';
arsort($ages);
print_r($ages);

echo '<br>';
ksort($ages); // ascedning sort function for associative array by key
print_r($ages);

echo '<br>';
krsort($ages); //descending sort function for associative array by key
print_r($ages);



















