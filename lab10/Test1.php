<?php


class Test1
{
    static public function getNew(){
        return new static;
    }



}

class ChildTest1 extends Test1{

}

$obj1=new Test1();
$obj2=new $obj1;

var_dump($obj1 !==$obj2);

$obj3= Test1::getNew();
var_dump($obj3 instanceof Test1);

$obj4= ChildTest1::getNew();
var_dump($obj4 instanceof ChildTest1);