<?php
return [
    "database" => [
        "host" => "localhost",
        "dbname" => "php-mvc",
        "username" => "root",
        "password" => "",
        "charset" => "utf8",
        "options" => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]
    ]
];