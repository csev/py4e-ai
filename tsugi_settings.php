<?php

/**
 * Non-secret Tsugi settings for this site.
 * Included at the end of tsugi/config.php. Database credentials stay in tsugi/config.php.
 */

$CFG->servicename = 'PY4E with AI';
$CFG->servicedesc = 'Python for Everybody with guidance on learning alongside AI tools';
$CFG->context_title = 'Python for Everybody (AI)';
$CFG->theme_base = '#7c3aed';

$CFG->lessons = $CFG->dirroot . '/../lessons.json';
$CFG->tool_folders = array('admin', 'tool', '../tools', '../mod');
$CFG->youtube_playlist = 'PLlRFEj9H3Oj7Bp8-DfGpfAfDBiblRfl5p';
$CFG->sessionlifetime = 18 * 60 * 60;
$CFG->privacy_url = $CFG->apphome . '/privacy';
$CFG->youtube_url = $CFG->apphome . '/mod/youtube/';
$CFG->tdiscus = $CFG->wwwroot . '/tool/tdiscus/';
$CFG->google_login_redirect = $CFG->apphome . '/login';

$CFG->top_menu_callback = function() {
    $buildmenu = __DIR__ . '/buildmenu.php';
    if ( ! file_exists($buildmenu) ) {
        return false;
    }
    require_once $buildmenu;
    return buildMenu();
};
