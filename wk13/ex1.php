<?php
//regular expression

$string = " Myname is Nicoleta, Nicoleta is my name";

if (preg_match("/Nicoleta/",$string,$array)){

    print_r($array);
}

echo "<br>";

if (preg_match("/Nicoleta/",$string)){

echo "it is match";

};


echo "<br>";
if(preg_match_all("/Nicoleta/",$string,$array)){

    print_r($array);
}

echo "<br>";
if(preg_match_all("/Ni(co)leta/",$string,$array)){

   echo $array[0][1];
}


echo "<br>";
$string2=preg_replace("/Nicoleta/", "Hansolo", $string);
echo $string2;