<?php


$path = getcwd(); //get current working directory
$items = scandir($path);

$files = array();

foreach ($items as $item) {
    $item_path = $path.DIRECTORY_SEPARATOR.$item;
    if (is_file($item_path)){
        $files[]=$item;
    }

}


echo "<p> File is the $path </p>";

echo "<p> Content of $ $path </p>";
echo '<ul>';
foreach ($files as $file){
    echo '<li>' . $file.'</li>' ;
}
echo '</ul>';


?>