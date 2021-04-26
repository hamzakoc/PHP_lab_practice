<?php
//multidimention array

$concats = array(
  array(
      "name"=>"Peter Parker",
      "email"=>"peterparker@gmail.com"
    ) ,
    array(
        "name"=>"Clark Kent",
        "email"=>"clarkkent@gmail.com"
    ) ,
    array(
        "name"=>"Harry Poter",
        "email"=>"harrypoter@gmail.com"
    )
);

echo "Peker Parker's email is ". $concats[0]["email"];