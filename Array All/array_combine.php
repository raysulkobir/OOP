<?php
    $array1 = array("a", "a", "c", "d");
    $array2 = array("apple", "ball", "cat", "dog");


    echo "<pre>";
    $result = array_combine($array1, $array2);
    print_r($result);

