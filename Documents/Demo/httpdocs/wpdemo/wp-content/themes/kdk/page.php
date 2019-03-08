<?php
/* Template Name: News
*
*
*/
get_header();
?>
<main>

 <div class="singlePageContainer">

<?php  if (have_posts()): ?>
  <?php while(have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
      <?php   the_content(); ?>

  <?php  endwhile; ?>
<?php  endif; ?>
 </div>

</main>

<?php get_footer(); ?>
