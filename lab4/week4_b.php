<?php
// functions

//11.functions with no parameters

function whatIsToday(){
    echo "Today is ".date('1',mktime());
}

whatIsToday();
echo "<br>";


//2 function with parameters

function calcSum($num1,$num2){
    $sum=$num1+$num2;
    echo "The sum of $num1 and $num2 is: " . $sum;
}

calcSum(4,7);
echo "<br>";

//3. function with parameters and default values

function customFont($font,$size=1.5){
echo "<p style=\"font-family:$font;font-size:{$size}em\">Hello World!</p>";
}

customFont("Arial",2);
customFont("Times");

echo "<br>";

//4. functions that retun value

function getSum($num1,$num2){
    $sum = $num1+$num2;
    return $sum;
}
echo getSum(3,4);
echo "<br>";


//5.functions that use array to return more than one value

function divideNumbers($divident, $divisor){
    $qoutient= $divident/$divisor;
    $array=array($divident,$divisor,$qoutient);
    return $array;
}

list($divident,$divisor,$qoutient)=divideNumbers(10,2);
echo "<br>";
echo $divident;
echo "<br>";
echo $divisor;
echo "<br>";
echo $qoutient;
echo "<br>";



//6. recursive functions:a function what call itself
function fact($num){
    if($num==1){
        return 1;
    }
    else{
        return ($num*fact($num-1));
    }
}

echo "Factorial = ".fact(5);
echo "<br>";
echo "<br>";



//7. scope of a variable
function test(){
    $greet = "Hello World 1";
    echo $greet;
}

test();
echo "<br>";

$greet2 = "Hello world2";
//function test2(){
//    echo $greet2;
//}
echo $greet2;
echo "<br>";

function test3(){
    global $greet2;
    echo $greet2;
}

test3();
echo "<br>";
$greet2="Goodbye";
test3();
echo "<br>";
echo "<br>";

//8. recursive functions within an array

function printValue($arr){
    global $count;
    global $items;
    if (!is_array($arr)){
        die("Error: the input is not an array.");
    }
    foreach($arr as $a){
        if (is_array($a)){
            printValue($a);
        }
        else {
            $items[] = $a;
            $count++;
        }
    }
    return array('total'=>$count, 'values'=>$items);
}

$species=array(
    "birds"=>array("Eagle", "Parrot", "Swan"),
    "mammals"=>array("Human", "cat"=>array("Lion", "Tiger", "Jaguar"), "Elephant", "Monkey"),
    "reptiles"=>array("snake"=>array("cobra"=>array("king cobra", "egyptian cobra"), "viper", "anaconda")),
    "crocodile",
    "dinosaur"=>array("t-rex", "albertosaurus")
);

$result = printValue($species);

echo $result['total'].' value(s) found: ';
echo implode(', ', $result['values']);







































