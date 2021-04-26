<?php
function demo($var){
    echo "Before try block.";
    echo "<br>";

    try {
        echo "\n This is the try block";
        echo "<br>";
        if($var==0){
            throw new Exception('Number is zero');
            echo "<br>";
            echo "\n After the throw, this line will not be executed";
            echo "<br>";
        }
    }catch (Exception $e){
        echo "\n Excecption caught. " .$e->getMessage();
        echo "<br>";
    } finally {
        echo "\n Here is where the cleanup activity be written and executed";
        echo "<br>";
    }
    echo "\n Whatever is after catch or finally will always be executed";
    echo "<br>";
}

demo(5);
echo "<br>";
echo "<br>";