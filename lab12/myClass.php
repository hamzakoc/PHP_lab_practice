<?php


class myClass
{
    public $mine;
    private $yours;
    static protected $test;

    static function test(){
        var_dump(property_exists('myClass', 'yours'));
    }
}

var_dump(property_exists('myClass', 'mine'));//true

var_dump(property_exists(new myClass, 'mine'));//true


var_dump(property_exists('myClass', 'yours'));//true
var_dump(property_exists('myClass', 'his'));//false
var_dump(property_exists('myClass', 'test'));//true