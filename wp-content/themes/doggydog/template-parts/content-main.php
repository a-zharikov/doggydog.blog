<a href="<?php the_permalink() ?>" class="page-main_item">
  <div class="page-main_item-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
    <?php the_post_thumbnail(); ?>  
  </div>
  <div class="page-main_item-text">
    <?php the_tags('<div class="page-main_item-text_tag"><object>','</object><object>','</object></div>'); ?>
    <?php the_title('<div class="page-main_item-text_title"><span>', '</span></div>') ?>
    <div class="page-main_item-text_date"><?php the_time('d F Y') ?></div>
  </div>
</a>