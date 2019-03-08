<?php  if (have_posts()): ?>
  <?php while(have_posts()) : the_post(); ?>
    <?php if (has_post_thumbnail()): ?>
    <div class="singleHeaderImg">
          <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

    <div class="newsInfoBar">
      <div class="newsArthor"> <?php the_author(); ?> | <?php the_date(); ?></div>

      <?php echo do_shortcode('[social]'); ?>
    </div>
  <?php  endwhile; ?>
<?php  endif; ?>
