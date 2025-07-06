<?php
    class SimpleClass {
        public $var = 'a default value';

        // method declaration 
        public function displayVar() {
            return $this->var;
        }
    }

    // create an object
    $obj = new simpleClass;

    // access the object's properties and methods
    echo $obj->displayVar();