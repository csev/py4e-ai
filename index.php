<?php

use \Tsugi\Core\LTIX;

if ( ! defined('COOKIE_SESSION') ) {
    define('COOKIE_SESSION', true);
}

if ( ! isset($CFG) ) {
    require_once __DIR__ . '/tsugi/config.php';
}
if ( session_id() == "" ) {
    $LAUNCH = LTIX::session_start();
}

require __DIR__ . '/includes/site.php';

$OUTPUT->header();
echo '<link rel="stylesheet" href="' . site_h(site_url('css/site.css')) . '">' . "\n";
$OUTPUT->bodyStart();
$OUTPUT->topNav();
$OUTPUT->flashMessages();

require __DIR__ . '/pages/home.php';

$foot = '
<p style="font-size: 0.875rem; color: #333; margin-top: 5em;">
PY4E with AI &mdash; Copyright Creative Commons Attribution 4.0 - Charles R. Severance
</p>';
$OUTPUT->setAppFooter($foot);
$OUTPUT->footer();
