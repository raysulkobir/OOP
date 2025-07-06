<?php
class A
{
    function foo()
    {
        if(isset($this)){
            echo "This is an instance of class A\n";
        } else {
            echo "This is not an instance of class A\n";
        }
    }
}


class B 
{
    function bar()
    {
        $a = new A();
        $a->foo(); // This will call the foo method on the instance of A
    }
}

// $a = new A();
// $a->foo();

$b = new B();
$b->bar(); // This will call the bar method on the instance of B