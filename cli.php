<?php


$dirver = "mysql";
$config = http_build_query(data: ['host' => 'localhost', 'port' => 3306, 'dbname' => 'phpiggy'], arg_separator: ':');

$dsn = "{$dirver}:{$config}";
echo $dsn;
