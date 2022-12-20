<?php
use Timber\Timber;

$context = Timber::context();
Timber::render( '404.twig', $context );
