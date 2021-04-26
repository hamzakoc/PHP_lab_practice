<?php
function inverse($x){
    if(!$x){
        throw new Exception("Division by zero.");
    }
    return 1/$x;

}

try {
    echo inverse(5).'\n';
    echo "<br>";
    echo inverse(0).'\n';
    echo "<br>";
}catch (Exception $e){
    echo "Caught exception : ", $e->getMessage(),"\n";
    echo "<br>";
} finally {
    echo "First finally";
}
echo "<br>";
echo "<br>";

try {

    echo inverse(0).'\n';
    echo "<br>";
}catch (Exception $e){
    echo "Caught exception : ", $e->getMessage(),"\n";
    echo "<br>";
} finally {
    echo "Second finally";
}

echo "<br>";
echo "Hello";