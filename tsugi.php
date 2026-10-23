<?php

use \Tsugi\Core\LTIX;

define('COOKIE_SESSION', true);
require_once __DIR__ . '/tsugi/config.php';

$launch = LTIX::session_start();

// /lessons => lessons.php when that file exists. Tsugi routes the rest.
$router = new Tsugi\Util\FileRouter();
$file = $router->fileCheck();
if ( $file ) {
    require_once $file;
    return;
}

$app = new \Tsugi\Controllers\Tsugi($launch);
$app['debug'] = true;
$app->run();
