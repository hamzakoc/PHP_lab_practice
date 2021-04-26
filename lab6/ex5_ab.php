<?php


$products=array(
    array('p1','Product 1', 19.99),
    array('p2','Product 2', 9.99),

    );

$file=fopen('products.csv', 'wb');
foreach ($products as $product){
    fputcsv($file,$product);
}
fclose($file);


//read data from the csv file

$file = fopen('products.csv', 'rb');
$products = array();
while(!feof($file)){
    $product=fgetcsv($file);
    if ($product==false){
        continue;
    }
    $product[]=$product;

    echo "<div> $product[0] | $product[1] |$product[2]  </div> ";
}