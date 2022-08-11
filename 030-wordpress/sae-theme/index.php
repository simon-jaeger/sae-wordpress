<?php
$context = Timber::context();

$posts = array_map(function ($post) {
  return "<li><a href='{$post->link}'>{$post->title}</a></li>";
}, Timber::get_posts());
$context['posts'] = join('', $posts);

$category = single_cat_title('', false);
$context['category'] = $category ? 'Kategorie: ' . $category : '';

Timber::render('config/index.twig', $context);
