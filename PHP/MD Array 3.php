<?php
$rows = Array
(
    "0" => Array
        (
            "id" => 1,
            "firstname" => "Firstname one",
            "lastname" => "Lastname one",
        ),

    1 => Array
        (
            "id" => 2,
            "firstname" => "Firstname two",
            "lastname" => "Lastname two",
        ),

    Array
        (
            "id" => 3,
            "firstname" => "Firstname three",
            "lastname" => "Lastname three",
        )
);

foreach ($rows as $row) {
    echo "{$row['id']} <br>"; 
    echo "{$row['firstname']} <br>";
    echo "{$row['lastname']} <br>";
}

/*
1
Firstname one
Lastname one
2
Firstname two
Lastname two
3
Firstname three
Lastname three 
*/