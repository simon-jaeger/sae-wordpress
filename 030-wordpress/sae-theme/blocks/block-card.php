<!--
php-variante, geht aber auch direkt in wordpress beim block builder,
dort einfach mit {{ var }} statt block_field('var')
-->
<div
  style="
    padding: 16px;
    border: 1px solid #aaaaaa;
    border-radius: 8px;
    margin-bottom: 16px;
  "
>
  <h2><?php block_field('title') ?></h2>
  <p><?php block_field('content') ?></p>
</div>
