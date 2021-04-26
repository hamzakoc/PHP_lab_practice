<?php


class FirstClass
{

    public $var = 'a default value';


    public function displayVar()
    {
        echo $this->var;
    }


}

$instance= new FirstClass();
$instance->displayVar();