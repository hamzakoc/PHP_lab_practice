<?php
    $user = ['name'=>'Nicoleta', 'email'=>'nicoleta@gmail.com', 'gender'=>'female'];
    $user =serialize($user);
    setcookie('user', $user, time()+(86400*30));

    $user = unserialize($_COOKIE['user']);
//    echo $user['name'];
    print_r($user);