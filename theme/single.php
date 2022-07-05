<?php
$context = Timber::context();

$post = Timber::get_post();
$context['post'] = $post;

$categories = array_map(function ($cat) {
  return "<li><a href='{$cat->link}'>{$cat->title}</a></li>";
}, $post->categories);
$context['categories'] = join('', $categories);

$comments = [];
foreach ($post->comments as $x) $comments[] = $x;
$comments = array_map(function ($comment) {
  return "
    <div>
      <strong>{$comment->author->name }</strong>
      <div>{$comment->comment_content }</div>
    </div>
  ";
}, $comments);
$context['comments'] = join('', $comments);

$wpForm = 'action="/wp-comments-post.php" method="post" ';
if (!comments_open()) $wpForm .= 'hidden';
$context['wp_form'] = $wpForm;

Timber::render('single.twig', $context);
