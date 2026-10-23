<?php

// Front controller for PHP's built-in server. Apache uses .htaccess instead.
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/');
$file = __DIR__ . $uri;

if ($uri === '/' || $uri === '/index.php') {
    return false;
}

if ($uri !== '/' && (is_file($file) || is_dir($file))) {
    return false;
}

// Match Apache rewriting the request onto tsugi.php.
$_SERVER['SCRIPT_NAME'] = '/tsugi.php';
require __DIR__ . '/tsugi.php';
