<?php


if ($method === 'GET') {
    $route = match ($uri) {
        "/" => "/controllers/index.php", // homepage
        "/users" => "/controllers/users/index.php", // get users
        default => "/views/not-found.php"
    };
} else if ($method === "POST") {
    $route = match ($uri) {
        "/users" => "/controllers/users/store.php", // store users
        default => "/views/not-found.php"
    };
}

require_once base_path . $route;
