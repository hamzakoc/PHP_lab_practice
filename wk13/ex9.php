<?php
class MyExeption extends Exception{}
class MyOtherExeption extends Exception{}

class Test{
    public function testing(){
        try {
            throw new MyExeption();

        }catch (MyExeption $e){
            var_dump(get_class($e));
        }
    }
}

$foo = new Test;
$foo->testing();