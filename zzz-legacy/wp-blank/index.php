<?php
use Timber\Timber;

$context = Timber::context();
$context['posts'] = Timber::get_posts();
Timber::render('index.twig', $context);
