<?php
use Timber\Timber;

require_once __DIR__ . '/vendor/autoload.php';
Timber::$dirname = 'templates';
$timber = new Timber;

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
