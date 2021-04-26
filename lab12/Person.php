<?php


class Person{

    public $name= "Jane";
    public $phone = 123456;


    public function __construct(){
        echo "__construct is called";
    }


    public function __destruct(){
        echo "__destruct is called".PHP_EOL;
    }


    public function __toString(){
        return "Name:  $this->name. Phone: $this->phone";
    }

    public function __get($propName){
        if($propName==='username'){
            return $this->name;
        }
        return "Property \"$propName\" does not exist ";
    }




}





$p=new Person();
echo $p;
