<?php
class MyExeption extends Exception{}
class Test{
    public function testing(){
        try {
            try {
                throw new MyExeption('foo');
            }catch (MyExeption $e){
                throw $e;
            }
        }catch (Exception $e){
            var_dump($e-getMessage());
        }
    }
}

$foo = new Test;
$foo->testing();