<?php
use Timber\Timber;

$context = Timber::context();
$context['page'] = Timber::get_post();
$context['posts'] = Timber::get_posts(['post_type' => 'post']);
Timber::render( ['custom/' . $context['page']->post_name . '.twig', 'page.twig' ], $context );
