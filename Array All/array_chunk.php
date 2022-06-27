<?php
    $persons = array("Harry" => 22, "Clark" => 32, "John" => 28);

    echo "<pre>";
    print_r(array_chunk($persons, 2, true));

