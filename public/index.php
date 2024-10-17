<?php

define('base_path', dirname(__DIR__));

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

require_once base_path . "/router.php";
