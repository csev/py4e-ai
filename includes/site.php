<?php

/**
 * Standalone PY4E with AI site. This folder is the whole site;
 * it does not load the py4e application or the site-ai vhost layer.
 */

$script = $_SERVER['SCRIPT_NAME'] ?? '/index.php';
$base = rtrim(str_replace('\\', '/', dirname($script)), '/');
if ($base === '/' || $base === '.') {
    $base = '';
}

function site_url(string $path = ''): string
{
    global $base;
    if ($path === '' || $path === '/') {
        return ($base === '' ? '' : $base) . '/';
    }
    return $base . '/' . ltrim($path, '/');
}

function site_h(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

if (session_status() === PHP_SESSION_ACTIVE) {
    $favicon = '<link rel="icon" href="' . site_h(site_url('favicon.ico')) . '" sizes="32x32">' . "\n"
        . '<link rel="icon" href="' . site_h(site_url('favicon.svg')) . '" type="image/svg+xml">' . "\n"
        . '<link rel="apple-touch-icon" href="' . site_h(site_url('apple-touch-icon.png')) . '">' . "\n";
    $header = $_SESSION['APP_HEADER'] ?? '';
    if (strpos($header, 'rel="icon"') === false) {
        $_SESSION['APP_HEADER'] = $favicon . $header;
    }
}
