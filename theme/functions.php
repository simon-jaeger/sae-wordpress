<?php
Timber::$dirname = 'templates';
$timber = new Timber;

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// load style.css in gutenberg for acurate preview
add_theme_support('editor-styles');
add_editor_style('style.css');
