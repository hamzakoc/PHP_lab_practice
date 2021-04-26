<?php



$file = fopen('numbers.csv', 'rb');

$numbers = array();

while(!feof($file)){

    $numbers=fgetcsv($file);

    if ($numbers==false){
        continue;
    }
    $numbers[]=$numbers;

//    echo "<div> $numbers[0] | $numbers[1] |$numbers[2]  </div> ";

//    foreach ($numbers as $name){
//        echo '<div>'.$name.'</div';
//    }


}

print_r($numbers);