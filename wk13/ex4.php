<?php

$mail = "mymail@mail.com";
if(preg_match("/^\S+@\S+$/", $mail))
    echo "Email address is valid";
else
    echo "Email address is invalid";

echo "<br>";





if(preg_match("/[A-Z0-9+_.-]]+@[A-Z0-9.-]+$]/", $mail))
    echo "Email address is valid";
else
    echo "Email address is invalid";

echo "<br>";


$sin = '123123123';
if(preg_match("/^(\d{3}--\d{3}--d{3}|\d{9})/", $mail))
    echo "SIN is valid";
else
    echo "SIN is invalid";

echo "<br>";