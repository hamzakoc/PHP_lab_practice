<?php



class Student
{
    public $name='';
    private $id=0;

    function __construct($name='',$id=0)
    {
        $this->name=$name;
        $this->id=$id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }


    public function getId()
    {
        return $this->id;
    }


    public function __get($name)
    {
        if(property_exists(__CLASS__, $name))
            return $this->name;
    }


    public function __set($name,$value)
    {
        if(property_exists(__CLASS__, $name))
            return $this->name=$value;
    }


    function __destruct()
    {
        echo 'I am here';
    }


}


$s=new Student();
$s->setId(123);
$s->{'name'}='Nicoleta';
echo $s->id;

$s->age=20;
var_dump($s);

$s1=new Student("Mary", 234);
var_dump($s1);











