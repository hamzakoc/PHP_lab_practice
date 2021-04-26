<?php
    $names=file('usernames.txt');
    foreach ($names as $name){
        echo '<div>'.$name.'</div';
    }

    echo '<hr><br>';

    $names = array('Ruth', 'Brad', 'Amy', 'Alex');
    $names=implode("\n",$names);
    file_put_contents('usernames.txt',$names);

    echo '<hr><br>';

    $names=file('usernames.txt');
    foreach ($names as $name){
        echo '<div>'.$name.'</div';
    }