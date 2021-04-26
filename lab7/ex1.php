<?php

    setcookie("name","nicoleta",time()+86400);
    setcookie("name","nicoleta", time()-1);
    $_SESSION['name'] = 'nicoleta';
    $_SESSION['name']='123';