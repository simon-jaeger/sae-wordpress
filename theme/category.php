<?php
$context = Timber::context();

$posts = Timber::get_posts();
$posts = array_filter($posts, function ($x) {
  return $x->comment_status !== 'closed';
});
$posts = array_map(function ($post) {
  return "<li><a href='{$post->link}'>{$post->title}</a></li>";
}, $posts);
$context['posts'] = join('', $posts);

$context['category'] = single_cat_title('', false);

Timber::render('category.twig', $context);
