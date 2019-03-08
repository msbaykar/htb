<?php get_header(); ?>
<?php $post = $wp_query->post; ?>
    <main>
      <?php if(in_category( 'urunler' ) ) :?>

        <?php get_template_part('content','product'); ?>

    <?php else: ?>
      <div class="SingleNewsContainer">
          <?php get_template_part('content','single'); ?>
      </div>
    <?php endif; ?>
    </main>
<?php get_footer(); ?>


<?php
