<?php



$i= 1;

while($i<=3){
    $i++;
    echo "The number is ". $i . "<br>";
}

echo "<br>";

$i=1;

do {
    $i++;
    echo "The number is ". $i . "<br>";
}
while($i<=3);


echo "<br>";

for ($i=1; $i<=3; $i++){
    echo "The number is ". $i . "<br>";
}


echo "<br>";

$colors = array("Red", "Green", "Green");

foreach($colors as $value){
    echo $value . "<br>";
}

$superheroes = array("name"=>"peter parker", "email"=>"peterparker@gmail.com");
foreach($colors as $key => $value){
    echo $key.":".$value .  "<br>";
}










?>