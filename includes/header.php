<?php

/** @var string $title */
/** @var string $page */

$nav = [
    'left' => [
    ],
    'right' => [
        'login' => 'Login',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= site_h($title) ?></title>
    <link rel="stylesheet" href="<?= site_h(site_url('css/site.css')) ?>">
</head>
<body>
<a class="skip" href="#main">Skip to main content</a>
<header class="site-nav">
    <div class="site-nav-inner">
        <a class="brand" href="<?= site_h(site_url()) ?>">PY4E with AI</a>
        <button type="button" class="nav-toggle" aria-controls="site-menu" aria-expanded="false">
            <span class="nav-toggle-label">Menu</span>
            <span class="nav-toggle-bars" aria-hidden="true"></span>
        </button>
        <nav id="site-menu" class="site-menu">
            <ul class="nav-left">
<?php foreach ($nav['left'] as $slug => $label) { ?>
                <li><a href="<?= site_h(site_url($slug)) ?>"<?= $page === $slug ? ' aria-current="page"' : '' ?>><?= site_h($label) ?></a></li>
<?php } ?>
                <li><a href="<?= site_h(site_url('book')) ?>"<?= $page === 'book' ? ' aria-current="page"' : '' ?>>Book</a></li>
            </ul>
            <ul class="nav-right">
                <li><a href="https://python.dr-chuck.com/?utm=py4e-ai">Register</a></li>
                <li><a href="https://ai.dr-chuck.com/" target="_blank" rel="noopener noreferrer">Podcast</a></li>
<?php foreach ($nav['right'] as $slug => $label) { ?>
                <li><a href="<?= site_h(site_url($slug)) ?>"<?= $page === $slug ? ' aria-current="page"' : '' ?>><?= site_h($label) ?></a></li>
<?php } ?>
            </ul>
        </nav>
    </div>
</header>
<div class="wrap">
