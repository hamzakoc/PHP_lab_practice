<?php


        $path = getcwd(); //get current working directory

        $items = scandir($path);
    echo "<p> Content of $ $path </p>";
    echo '<ul>';
    foreach ($items as $item){
        echo '<li>' . $item.'</li>' ;
    }
    echo '</ul>';
