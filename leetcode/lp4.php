<?php
class Stack
{
    private $stack=[];
    private $size =0;
    public function __construct($size)
    {
        $this->size=$size;

    }
    public function push($value)
    {
        if (count($this->stack)>=$this->size){
            return false;
        }
        array_unshift($this->stack,$value);
    }
    public function pop()
    {
        if ($this->size==0){
            return false;
        }
        array_shift($this->stack);
    }

    public function top()
    {
        if($this->size==0){
            return false;
        }
        return current($this->stack);
    }
    public function data()
    {
        return $this->stack;
    }
}


$stack=new Stack(10);
$stack->push(2);
$stack->push(10);
var_dump($stack->top());

?>