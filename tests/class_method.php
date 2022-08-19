<?php

abstract class MyAbstractClass
{
    function abstractMethod1(): string {
        return 'abstractMethod1';
    }
}
class FirstClass extends MyAbstractClass
{
    private $firstVariable = 0;
    
    public function firstMethod():string {
        return 'firstMethod'. $this->firstVariable;
    }
}

$obj = new FirstClass();
echo $obj->firstMethod();
echo $obj->abstractMethod1();