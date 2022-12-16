<?php
use Timber\Timber;

$context = Timber::context();
$context['posts'] = Timber::get_posts();
$context['category'] = single_cat_title('', false);
Timber::render('archive.twig', $context);
