<?php

interface Database{

    function listOrders();
    function addOrders();
    function removeOrder();

}

class MYSQLDatabase implements Database{
    public function addOrders()
    {
        // TODO: Implement addOrders() method.
    }

    public function listOrders()
    {
        // TODO: Implement listOrders() method.
    }
    public function removeOrder()
    {
        // TODO: Implement removeOrder() method.
    }
}

class OracleDatabase implements Database{

    public function listOrders()
    {
        // TODO: Implement listOrders() method.
    }
    public function addOrders()
    {
        // TODO: Implement addOrders() method.
    }
    public function removeOrder()
    {
        // TODO: Implement removeOrder() method.
    }
}

$database1= new  MYSQLDatabase();
foreach ($database1->listOrders() as $order){

}


$database2= new  MYSQLDatabase();
foreach ($database2->listOrders() as $order){

}