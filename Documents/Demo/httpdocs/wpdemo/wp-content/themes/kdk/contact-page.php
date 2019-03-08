<?php
/* Template Name: Contact Page
*
*
*/
get_header();
?>
<main>

  <div class="contactContainer">
    <div class="sutun">
      <?php  if (have_posts()): ?>
        <?php while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>

        <?php  endwhile; ?>
      <?php  endif; ?>
    </div>
    <div class="sutun">
      <?php $form = cs_get_option('form') ?>
      <?php echo  do_shortcode($form) ?>

    </div>
    <div class="mapContainer">

      <?php echo cs_get_option('mapframe'); ?>

    </div>
  </div>


</main>

<?php get_footer(); ?>
