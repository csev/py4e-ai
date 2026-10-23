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
