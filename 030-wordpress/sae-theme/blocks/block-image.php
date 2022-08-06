<figure
  style="
    position:relative;
    display:flex;
    justify-content:center;
    align-items:center;
    margin-bottom:16px;
  "
>
  <img src="<?php block_field('file') ?>" alt="<?php block_field('alt') ?>">
  <figcaption
    style="
      position:absolute;
      color: white;
      font-size: 64px;
    "
  >
    <?php block_field('text') ?>
  </figcaption>
</figure>
