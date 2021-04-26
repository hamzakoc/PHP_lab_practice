<?php

    $text=file_get_contents('message.txt');
    $text=htmlspecialchars($text);
    echo '<div>' .$text. '</div>';

    echo '<hr><br>';

    $text1="This is line 1. \nThis is line 2.\n";
    file_put_contents('message.txt', $text1);


    echo '<hr><br>';

    $text=file_get_contents('message.txt');
    $text=htmlspecialchars($text);
    echo '<div>' .$text. '</div>';


?>