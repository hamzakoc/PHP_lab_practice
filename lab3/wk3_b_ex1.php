<?php


// If-else statement
$gender = 'F';

if ($gender=='F')
    echo 'FEMALE';
else
    echo 'MALE';

echo '<br>';
$day=34;
if ($day>34)
    $quarter = 'last';
elseif ($day>=14)
    $quarter ='third';
elseif ($day>=7)
    $quarter='second';
else
    $quarter = 'first';

echo 'Quarter is ' . $quarter . '.';

echo '<br>';

// Switch statement

$randomScore=rand(0,4);

switch ($randomScore){
    case 0:
        echo '0 points, try again.';
        break;
    case 1:
        echo '1 points, try again.';
        break;
    case 2:
        echo '2 points, try again.';
        break;
    case 3:
        echo '3 points, one more time to reach best.';
        break;
    case 4:
        echo '4 points, you win.';
        break;

}

//logical operators
echo '<br>';

$a=true;
$b=true;

if ($a and $b){
    echo 'both are true';

}

echo '<br>';
$c=10;
if ($c>=10){
    if($c %10 ===0){
        echo 'is divisible by 10.';
    }
}else{
    echo 'this is negative number';
}































