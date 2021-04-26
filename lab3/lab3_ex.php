<?php
echo "<pre>";

$random_number_array = range(0, 4);
shuffle($random_number_array );

$languages = array("PHP", "Csharp", "Java", "Javascript", "PHP");

//a
echo "_________a_________"."<br>"."<br>";
$mixedArr = array_combine ( $random_number_array , $languages );
print_r($mixedArr);
echo "<br>"."<br>";

//b
echo "_________b_________"."<br>"."<br>";
asort($mixedArr);
print_r($mixedArr);
echo "<br>"."<br>";


//c
echo "_________c_________"."<br>"."<br>";
echo "sum of the array = " . array_sum($random_number_array) . "\n";
echo "<br>"."<br>";


//d
echo "_________d_________"."<br>"."<br>";
$result = array_unique($mixedArr);
print_r($result);
echo "<br>"."<br>";


//e
echo "_________e_________"."<br>"."<br>";
foreach($mixedArr as $key => $val)
{
    switch ($key){
        case 0:
            $mixedArr[$key] = 'aaaa';

            break;
        case 1:
            $mixedArr[$key] = 'bbbb';
            break;
        case 2:
            $mixedArr[$key] = 'cccc';
            break;
        case 3:
            $mixedArr[$key] = 'dddd';
            break;
        case 4:
            $mixedArr[$key] = 'eeee';
            break;

    }
}

print_r($mixedArr);