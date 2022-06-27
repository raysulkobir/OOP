<?php
$movies = array(
    array(
        "id" => "1",
        "name" => "Titanic",
        "genre" => "Drama",
    ),
    array(
        "id" => "2",
        "name" => "Justice League",
        "genre" => "Action",
    ),
    array(
        "id" => "30",
        "name" => "Joker",
        "genre" => "Thriller",
    )
);


echo "<pre>";
$result = array_column($movies, "name", "id");

        print_r($result);

