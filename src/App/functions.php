<?php

declare(strict_types=1);


// Debug
function dd(mixed $value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}


// Escaping Data
function e(mixed $value): string
{
    return htmlspecialchars((string)$value);
}

//Redirect to route
function redirectTo(string $path)
{
    header("Location: {$path}");
    http_response_code(302);
    exit;
}
