<?php


class MyClass1
{

    public function __construct()
    {
        echo 'The class " ' .__CLASS__ . '"was initiated! <br>';
    }
    public function __destruct()
    {
        echo 'The class " ' .__CLASS__ . '"was destroyed! <br>';
    }

}

$obj=new MyClass1();