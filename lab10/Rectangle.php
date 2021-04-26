<?php


class Rectangle
{
    public $length= 3;
    public $width=4;


    public function getPerimeter($length, $width)
    {
        return (2*$this->$length+$this->$width);
    }

    public function getArea($length, $width)
    {
        return ($this->$length*$this->$width);
    }

}
